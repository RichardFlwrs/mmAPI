<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = [
        'name', 'user_id', 'address', 'phone', 'active'
    ];

    protected $hidden = [
        'user_id'
    ];
}
