<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
    
    // User data belongs to a user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}