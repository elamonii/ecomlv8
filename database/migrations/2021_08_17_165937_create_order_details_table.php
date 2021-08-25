<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no',100);
            $table->integer('product_id')->nullable();
            $table->integer('product_qty')->nullable();
            $table->float('product_price',7,2)->nullable();
            $table->float('product_discount',7,2)->nullable();
            $table->integer('product_color')->nullable();
            $table->integer('product_size')->nullable();
            $table->string('order_note',500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
