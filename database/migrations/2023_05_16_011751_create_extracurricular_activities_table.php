<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurricular_activities', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa');
            $table->foreign('siswa')->references('id')->on('students');
            $table->unsignedBigInteger('extracurricular');
            $table->foreign('extracurricular')->references('id')->on('extracurriculars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extracurricular_activities');
    }
};
