<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->notNull();
            $table->unsignedBigInteger('size_id')->notNull();
            $table->foreign('product_id')->references('id')->on('products')->onDelete("cascade");
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete("cascade");
            $table->unique( array('product_id','size_id') );
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
        Schema::dropIfExists('product_size');
    }
}
