<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $hidden = [
        'id'
    ];

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
