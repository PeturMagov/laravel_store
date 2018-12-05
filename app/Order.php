<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'shipping_address', 'name', 'phone', 'status'
  	];
  	public function order_items() {
  		return $this->hasMany('App\OrderItem');
  	}
}
