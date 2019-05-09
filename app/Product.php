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

    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function record()
    {
        return $this->belongsTo('App\Record');
    }

    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }

    public function condition()
    {
        return $this->belongsTo('App\Type', 'condition_id');
    }

    public function files()
    {
        return $this->hasMany('App\File', 'product_id');
    }
}
