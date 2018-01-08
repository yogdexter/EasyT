<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exam_Questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Exam_Id');
            $table->text('Questions');
            $table->text('Answer1');
            $table->text('Answer2');
            $table->text('Answer3');
            $table->text('Answer4');
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
        Schema::dropIfExists('Exam_Questions');
    }
}
