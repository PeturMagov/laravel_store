<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            date_default_timezone_set("Europe/Sofia");
            $date = date("H:i d-m-Y");
            
            $table->increments('id');
            $table->text('shipping_address');
            $table->string('name');
            $table->string('phone');
            $table->string('status')->default('pending');
            $table->string('ordered_at')->default($date);
            $table->string('shipped_at')->default('---');
            $table->string('completed_at')->default('---');
            $table->string('canceled_at')->default('---');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
