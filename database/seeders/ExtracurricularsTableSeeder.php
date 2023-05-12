<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExtracurricularsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_wali_kelas' => 'Nur Khairiyah'],
            ['nama_wali_kelas' => 'Nur Azizah'],
            ['nama_wali_kelas' => 'Siti Nurhaliza'],
            ['nama_wali_kelas' => 'Rosiati Nurul'],
            ['nama_wali_kelas' => 'Miswandi'],
            ['nama_wali_kelas' => 'Susianto'],
        ];

        foreach ($data as $row) {
            DB::table('homeroom_teachers')->updateOrInsert($row);
        }
    }
}
