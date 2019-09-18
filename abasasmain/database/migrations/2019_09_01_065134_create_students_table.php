<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('StudentId');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Phone');
            $table->string('guardianPhone');
            $table->string('Email');
            $table->integer('Image');
            $table->string('HomeTown');
            $table->string('Gender');
            $table->string('BloodGroup');
            $table->string('Religion');
            $table->mediumText('about');



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
        Schema::dropIfExists('students');
    }
}
