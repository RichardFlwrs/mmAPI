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
}
