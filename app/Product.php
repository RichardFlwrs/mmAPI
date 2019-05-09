<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'active', 'record_id', 'quantity',
        'brand', 'model_number', 'serial_number',
        'type_id', 'condition_id', 'description',
        'details', 'costo_u', 'costo_t'
    ];
}
