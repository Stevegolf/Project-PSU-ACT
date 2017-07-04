<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dep_name');
            $table->timestamps();
        });

         Schema::table('events', function(Blueprint $table) {
            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('departments');
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropColum('department_id');
        });
    }
}
