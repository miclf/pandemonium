<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Create a ‘sessions’ SQL table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {

            // Primary key
            $table->increments('id');

            // Foreign key
            $table->unsignedInteger('legislature_id');

            // Foreign key constraint
            $table->foreign('legislature_id')
                  ->references('id')
                  ->on('legislatures');

            // Main data
            $table->string('name');
            $table->boolean('extraordinary')->default(0);
            $table->datetime('started_at');
            $table->datetime('ended_at')->nullable();

        });
    }

    /**
     * Drop a ‘sessions’ SQL table.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');
    }
}
