<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name', 'email', 'fax', 'phone', 'password', 'confirmation_token','photo_id', 'id_expires_on' 
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
       
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
    public function hasAdminRole()
    {
        return $this->hasRole('Admin');
    }
    public function hasDCRole()
    {
        return $this->hasRole('Datacenter Op');
    }

    public function hasCCARole()
    {
        return $this->hasRole('Change Control Authoriser');
    }
    
    public function hasAARole()
    {
        return $this->hasRole('Access Authoriser');
    }
    
    public function hasPermanentAccess()
    {
        return $this->hasOne(\App\PermanentAccessListEntry::class);
    }
}
