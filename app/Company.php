<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone', 'has_multiple_cca', 'has_multiple_aa'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
    
    public function permanentAccessListEntries()
    {
        return $this->hasMany('App\PermanentAccessListEntry');
    }

    public function equipment()
    {
        return $this->hasMany(\App\Equipment::class);
    }
}
