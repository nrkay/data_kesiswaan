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
        Schema::table('extracurricular_activities', function (Blueprint $table) {
            Schema::table('extracurricular_activities', function (Blueprint $table) {
                $table->dropForeign('extracurricular_activities_siswa_foreign');
                $table->dropForeign('extracurricular_activities_extracurricular_foreign');
                $table->foreign('siswa')->references('id')->on('students')->onDelete('cascade');
                $table->foreign('extracurricular')->references('id')->on('extracurriculars')->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extracurricular_activities', function (Blueprint $table) {
            Schema::table('extracurricular_activities', function (Blueprint $table) {
                $table->dropForeign(['siswa']);
                $table->dropForeign(['extracurricular']);
                $table->foreign('siswa')->references('id')->on('students');
                $table->foreign('extracurricular')->references('id')->on('extracurriculars');
            });
        });
    }
};
