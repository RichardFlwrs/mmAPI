<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    protected $fillable = ['name', 'description'];
    protected $hidden = ['id'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
