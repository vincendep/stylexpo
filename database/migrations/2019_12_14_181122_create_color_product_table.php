<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->notNull();
            $table->unsignedBigInteger('color_id')->notNull();
            $table->foreign('product_id')->references('id')->on('products')->onDelete("cascade");
            $table->foreign('color_id')->references('id')->on('colors')->onDelete("cascade");
            $table->unique( array('product_id','color_id') );
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
        Schema::dropIfExists('color_product');
    }
}
