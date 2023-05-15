<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kelas' => 'IA', 'wali_kelas' => 12],
            ['kelas' => 'IA', 'wali_kelas' => 14],
            ['kelas' => 'IIA', 'wali_kelas' => 11],
            ['kelas' => 'IIB', 'wali_kelas' => 16],
        ];

        foreach ($data as $row) {
            DB::table('classrooms')->updateOrInsert($row);
        }
    }
}
