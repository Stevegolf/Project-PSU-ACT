<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('Act_ID');
            $table->string('Act_NameTH');
            $table->string('Act_NameEN');
            $table->string('Act_depart');
            $table->date('Act_Date');
            $table->time('Act_Time');
            $table->string('Act_Locat');
            $table->double('Act_Hour');
            $table->double('Act_Req');
            $table->date('Act_Deadline');
            $table->double('Act_Sem');
            $table->double('Act_Year');
            $table->string('Act_Type');
            $table->string('Act_Cate');
            $table->string('Act_Note');
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
        Schema::dropIfExists('activities');
    }
}
