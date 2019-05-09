<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'owner_id', 'user_id', 'status_id', 'client_id', 'folio', 'numero_orden', 'monto_total', 'active', 'finished_at', 'sended_at'
    ];

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function userAssigned()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function records()
    {
        return $this->hasMany('App\Record');
    }

    public function files()
    {
        return $this->hasMany('App\File', 'order_id');
    }

    public function contacts()
    {
        return $this->belongsToMany('App\Field', 'field_order', 'order_id', 'field_id');
    }
}
