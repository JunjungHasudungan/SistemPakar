<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $symptoms = [
            [
                'symptom_code'      => 'KG01',
                'description'       => 'Gejala Pertama',
                'problem_id'        => 1,
            ],
            [
                'symptom_code'      => 'KG02',
                'description'       => 'Gejala Kedua',
                'problem_id'        => 1,
            ],
        ];

        Symptom::insert($symptoms);
    }
}
