<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
    	'number', 'product_id','status'
  	];

  	public function product() {
  		return $this->belongsTo('App\Product');
  	}
}
