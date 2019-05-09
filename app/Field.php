<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    //

    protected $fillable = [
        'name', 'area', 'client_id', 'user_id', 'field_id', 'contact_id', 'summary_id', 'type_id', 'data'
    ];

    protected $hidden = [
        'client_id', 'user_id', 'field_id', 'contact_id', 'summary_id'
    ];
}
