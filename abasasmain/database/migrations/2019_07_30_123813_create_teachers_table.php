<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('TeacherId');
            $table->string("FirstName");
            $table->string("LastName");
            $table->string("Phone");
            $table->string("Email");
            $table->string("Position");
            $table->string("Department");
            $table->string("Image");
            $table->string("Skills");
            $table->string("About");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
