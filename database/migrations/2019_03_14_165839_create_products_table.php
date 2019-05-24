<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->double('price');
            $table->double('discount')
                  ->nullable();
            $table->integer('qty');
            $table->enum('featured', ['yes', 'no'])
                  ->default('no');
            $table->bigInteger('category_id')
                  ->index()
                  ->unsigned();
            $table->bigInteger('brand_id')
                  ->index()
                  ->unsigned();
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('brand_id')
                  ->references('id')
                  ->on('brands')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
