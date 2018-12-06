<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'shipping_address', 'name', 'phone', 'status', 'shipped_at', 'completed_at', 'canceled_at'
    ];
    public function order_items() {
        return $this->hasMany('App\OrderItem');
    }
}
