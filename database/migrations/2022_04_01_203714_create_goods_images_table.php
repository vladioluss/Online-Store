<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('goods_images', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->bigInteger('goods_id')
                ->unsigned();
            $table->foreign('goods_id')
                ->references('id')
                ->on('goods')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('goods_images');
    }
}
