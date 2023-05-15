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
        Schema::table('extracurriculars', function (Blueprint $table) {
            DB::statement('ALTER TABLE extracurriculars CHANGE nama_wali_kelas nama_extracurricular VARCHAR(255)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extracurriculars', function (Blueprint $table) {
            DB::statement('ALTER TABLE extracurriculars CHANGE nama_extracurricular nama_wali_kelas VARCHAR(255)');
        });
    }
};
