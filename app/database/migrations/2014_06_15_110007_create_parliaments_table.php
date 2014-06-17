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
            $table->string('id', 1)->primary();

            // Main data
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
