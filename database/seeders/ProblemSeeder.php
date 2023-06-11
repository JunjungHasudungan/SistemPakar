<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Problem;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $problems = [
            [
                'problem_code'      => 'SP01',
                'description'       => 'Permasalahan Pertama',
            ],
            [
                'problem_code'      => 'SP02',
                'description'       => 'Permasalahan Kedua',
            ],
        ];

        Problem::insert($problems);
    }
}
