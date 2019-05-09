<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    protected $fillable = [
        'name', 'description'
    ];

    protected $hidden = [
        'id'
    ];

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function products_conditions()
    {
        return $this->hasMany('App\Product', 'id', 'condition_id');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function additional_fields()
    {
        return $this->hasMany('App\Field');
    }

    public function contact_fields()
    {
        return $this->hasMany('App\Field');
    }
}
