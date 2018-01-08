<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students_Details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Name');
            $table->text('Address');
            $table->text('Contact');
            $table->text('Email');
            $table->text('Gender');
            $table->text('DOB');
            $table->text('Class_Id');
            $table->text('Teacher_Id');
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
        Schema::dropIfExists('Students_Details');
    }
}
