<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->notNull();
            $table->string('excerpt');
            $table->unsignedInteger('category_id')->nullable()->default(null);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->string('image')->notNull();
            $table->string('sale_text');
            $table->boolean('active')->notNull()->default(true);
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
        Schema::dropIfExists('banners');
    }
}
