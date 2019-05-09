<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //

    protected $fillable = [
        'name', 'location', 'order_id', 'record_id', 'product_id', 'type_id'
    ];

    protected $hidden = [
        'owner_id', 'type_id', 'location'
    ];


    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function record()
    {
        return $this->belongsTo('App\Record');
    }
}
