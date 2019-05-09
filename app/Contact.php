<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = [
        'client_id', 'name', 'area', 'puesto', 'email', 'phone', 'active'
    ];

    protected $hidden = [
        'client_id', 'active'
    ];

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function of_client()
    {
        return $this->belongsTo('App\Client');
    }

    public function fields()
    {
        return $this->hasMany('App\Field');
    }
}
