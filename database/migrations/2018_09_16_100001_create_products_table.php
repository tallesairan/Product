<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: products
         */
        Schema::create('products', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('slug', 255)->nullable();
            $table->text('model')->nullable();
            $table->longText('name')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->enum('status', ['Enabled','Disabled'])->nullable();
            $table->longText('description')->nullable();
            $table->longText('return_policy')->nullable();
            $table->text('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->tinyInteger('featured')->nullable();
            $table->tinyInteger('premium')->nullable();
            $table->text('image')->nullable();
            $table->enum('outofstock_status', ['In stock','Out of stock','Pre-order'])->nullable();
            $table->integer('order')->nullable();
            $table->enum('weight_class', ['Kilogram','Gram','Pound','Ounce'])->nullable();
            $table->enum('length_class', ['Centimeter','Millimeter','Inch'])->nullable();
            $table->dateTime('date_available')->nullable();
            $table->text('images')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('products');
    }
}
