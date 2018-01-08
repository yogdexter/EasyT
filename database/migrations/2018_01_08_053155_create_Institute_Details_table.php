<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Institute_Details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('I_Name');
            $table->text('I_Address');
            $table->text('Principle_Name');
            $table->text('Login_Id');
            $table->text('password');
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
        Schema::dropIfExists('Institute_Details');
    }
}
