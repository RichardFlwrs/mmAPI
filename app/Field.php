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

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
