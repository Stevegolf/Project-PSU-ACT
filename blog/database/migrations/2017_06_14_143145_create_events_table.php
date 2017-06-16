<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('act_id');
            $table->string('act_name');
            $table->string('act_dep');
            $table->string('act_locat');
            $table->date('data_begin');
            $table->time('time_begin');
            $table->date('data_end');
            $table->time('time_end');
            $table->double('act_sem');
            $table->double('act_year');
            $table->string('act_type');
            $table->double('act_req');
            $table->double('act_hour');
            $table->string('act_note');
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
        Schema::dropIfExists('event');
    }
}
