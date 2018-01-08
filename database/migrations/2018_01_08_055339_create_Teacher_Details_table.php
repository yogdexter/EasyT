<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teacher_Details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Teacher_Name');
            $table->text('Address');
            $table->text('Contact');
            $table->text('Email');
            $table->text('Gender');
            $table->text('DOB');
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
        Schema::dropIfExists('Teacher_Details');
    }
}
