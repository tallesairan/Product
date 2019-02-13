<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateAttributeGroupsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: attribute_groups
         */
        Schema::create('attribute_groups', function ($table) {
            $table->increments('id');
            $table->string('slug', 255)->nullable();
            $table->text('name')->nullable();
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
        Schema::drop('attribute_groups');
    }
}
