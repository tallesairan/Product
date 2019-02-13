<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateAttributesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: attributes
         */
        Schema::create('attributes', function ($table) {
            $table->increments('id');
            $table->string('slug', 255)->nullable();
            $table->integer('group_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->integer('order')->nullable();
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
        Schema::drop('attributes');
    }
}
