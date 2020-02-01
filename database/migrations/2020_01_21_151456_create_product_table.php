<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->string('name_product');
            $table->text('description');
            $table->string('width');
            $table->string('height');
            $table->string('dense');
            $table->string('material');
            $table->enum('finish',['tabac','black']);
            $table->float('price', 8, 3);
            $table->string('detail1');
            $table->string('detail2');
            $table->string('detail3');
            $table->enum('category',['mirrors','cabinets','seating','tables','bedroom']);
            $table->string('code_product');
            $table->integer('stock');
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
        Schema::dropIfExists('product');
    }
}
