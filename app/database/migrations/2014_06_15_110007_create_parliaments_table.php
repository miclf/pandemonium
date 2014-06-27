<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParliamentsTable extends Migration
{
    /**
     * Create a ‘parliaments’ SQL table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliaments', function (Blueprint $table) {

            // Primary key
            $table->increments('id');

            // Main data
            $table->string('abbr', 1);
            $table->string('name');

        });
    }

    /**
     * Drop a ‘parliaments’ SQL table.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parliaments');
    }
}
