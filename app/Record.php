<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //

    protected $fillable = [
        'order_id', 'numero_cotizacion', 'monto_total', 'temporal'
    ];

    protected $hidden = [
        'order_id'
    ];

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function files()
    {
        return $this->hasMany('App\File', 'record_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product')->where('active', 1);
    }
}
