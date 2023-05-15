<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void

    {
        $data = [
            ['name' => 'Radita Aja', 'NIS' => 20343021, 'kelas' => 1],
            ['name' => 'Hafidz Yahya', 'NIS' => 20343022, 'kelas' => 2],
            ['name' => 'Ade Leily', 'NIS' => 20343041, 'kelas' => 3],
            ['name' => 'Alda Aulia', 'NIS' => 20356021, 'kelas' => 4],
            ['name' => 'Bulan Aulia', 'NIS' => 20873021, 'kelas' => 1],
            ['name' => 'Retnodayu', 'NIS' => 20340921, 'kelas' => 2],
            ['name' => 'Arief Muhammad', 'NIS' => 45343021, 'kelas' => 2],
            ['name' => 'Muhammad Habib', 'NIS' => 76343021, 'kelas' => 3],
            ['name' => 'Muhammad Taufiq', 'NIS' => 34343021, 'kelas' => 4],
            ['name' => 'Indah Julita', 'NIS' => 20356021, 'kelas' => 1],
            ['name' => 'Ananda Restika', 'NIS' => 28743021, 'kelas' => 3],
            ['name' => 'Ayu Cantika', 'NIS' => 20342321, 'kelas' => 4],
            ['name' => 'Gabriela Putri', 'NIS' => 29843021, 'kelas' => 4],
            ['name' => 'Putri Nasution', 'NIS' => 24543021, 'kelas' => 2],
            ['name' => 'Muhammad Prayogi', 'NIS' => 34343021, 'kelas' => 3],
            ['name' => 'Nur Ririn', 'NIS' => 20343022, 'kelas' => 2],
            ['name' => 'Ririn Annisa', 'NIS' => 20311021, 'kelas' => 4],
            ['name' => 'Raudhatul Jannah', 'NIS' => 22343021, 'kelas' => 4],
        ];

        foreach ($data as $row) {
            DB::table('students')->updateOrInsert($row);
        }
    }
}
