<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'owner_id', 'user_id', 'status_id', 'client_id', 'folio', 'numero_orden', 'monto_total', 'active', 'finished_at', 'sended_at'
    ];
}
