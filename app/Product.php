<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'brand_id', 'price'
  	];

  	public function brand() {
  		return $this->belongsTo('App\Brand');
  	}
  	public function units() {
  		return $this->hasMany('App\Unit');
  	}
}
