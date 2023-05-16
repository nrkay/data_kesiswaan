<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExtracurricularActivies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['siswa' => 1, 'extracurricular' => 1],
            ['siswa' => 1, 'extracurricular' => 2],
            ['siswa' => 2, 'extracurricular' => 1],
            ['siswa' => 2, 'extracurricular' => 5],
            ['siswa' => 3, 'extracurricular' => 2],
            ['siswa' => 3, 'extracurricular' => 3],
            ['siswa' => 3, 'extracurricular' => 5],
            ['siswa' => 4, 'extracurricular' => 6],
            ['siswa' => 4, 'extracurricular' => 5],
            ['siswa' => 4, 'extracurricular' => 4],
            ['siswa' => 5, 'extracurricular' => 6],
            ['siswa' => 5, 'extracurricular' => 5],
            ['siswa' => 5, 'extracurricular' => 4],
            ['siswa' => 6, 'extracurricular' => 1],
            ['siswa' => 6, 'extracurricular' => 2],
            ['siswa' => 6, 'extracurricular' => 3],
            ['siswa' => 7, 'extracurricular' => 2],
            ['siswa' => 7, 'extracurricular' => 3],
            ['siswa' => 7, 'extracurricular' => 4],
            ['siswa' => 8, 'extracurricular' => 5],
            ['siswa' => 8, 'extracurricular' => 6],
            ['siswa' => 8, 'extracurricular' => 1],
            ['siswa' => 8, 'extracurricular' => 2],
            ['siswa' => 9, 'extracurricular' => 3],
            ['siswa' => 9, 'extracurricular' => 4],
            ['siswa' => 9, 'extracurricular' => 5],
            ['siswa' => 10, 'extracurricular' => 6],
            ['siswa' => 10, 'extracurricular' => 1],
            ['siswa' => 10, 'extracurricular' => 2],
            ['siswa' => 10, 'extracurricular' => 3],
            ['siswa' => 11, 'extracurricular' => 4],
            ['siswa' => 12, 'extracurricular' => 5],
            ['siswa' => 13, 'extracurricular' => 6],
            ['siswa' => 14, 'extracurricular' => 1],
            ['siswa' => 15, 'extracurricular' => 2],

        ];

        foreach ($data as $row) {
            DB::table('extracurricular_activities')->updateOrInsert($row);
        }
    }
}
