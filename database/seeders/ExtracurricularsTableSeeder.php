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
            ['nama_extracurricular' => 'UKBA'],
            ['nama_extracurricular' => 'PPIPM'],
            ['nama_extracurricular' => 'Pramuka'],
            ['nama_extracurricular' => 'PMR'],
            ['nama_extracurricular' => 'Rohis'],
            ['nama_extracurricular' => 'Basket'],
        ];

        foreach ($data as $row) {
            DB::table('extracurriculars')->updateOrInsert($row);
        }
    }
}
