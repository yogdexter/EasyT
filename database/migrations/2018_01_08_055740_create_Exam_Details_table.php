<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exam_Details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Exam_Type');
            $table->text('Exam_Time');
            $table->text('Class_Id');
            $table->text('Subjects');
            $table->text('Total');
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
        Schema::dropIfExists('Exam_Details');
    }
}
