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

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function fields()
    {
        return $this->hasMany('App\Field');
    }

    public function contacts()
    {
        return $this->hasMany('App\Contact', 'client_id')->where('active', '<=>', 1);
    }
}
