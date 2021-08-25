<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('sub_category_id',200)->nullable();
            $table->string('product_name',200);
            $table->string('product_description',1000)->nullable();
            $table->string('product_slug',100)->nullable();
            $table->string('product_image',100)->nullable();
            $table->float('product_buying_price',10, 2)->nullable();
            $table->float('product_selling_price',10, 2)->nullable();
            $table->integer('product_discount_type')->nullable();
            $table->float('product_discount_price',10, 2)->nullable();
            $table->float('product_tax',10, 2)->nullable();
            $table->string('product_color',200)->nullable();
            $table->string('product_size',200)->nullable();
            $table->string('product_specification',1000)->nullable();
            $table->integer('product_stock')->nullable();
            $table->integer('product_stock1')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('products');
    }
}
