<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermanentAccessListEntry extends Model
{
    protected $fillable = ['company_id', 'user_id', 'approved_by'];
    protected $casts = ['approved' => 'boolean'];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
