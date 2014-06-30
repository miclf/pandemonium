<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegislaturesTable extends Migration
{
    /**
     * Create a ‘legislatures’ SQL table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legislatures', function (Blueprint $table) {

            // Primary key
            $table->increments('id');

            // Foreign key
            $table->unsignedInteger('parliament_id');

            // Foreign key constraint
            $table->foreign('parliament_id')
                  ->references('id')
                  ->on('parliaments');

            // Main data
            $table->smallInteger('number')->unsigned();

        });
    }

    /**
     * Drop a ‘legislatures’ SQL table.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('legislatures');
    }
}
