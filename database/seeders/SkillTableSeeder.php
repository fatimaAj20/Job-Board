<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Java'],
            ['name' => 'Python'],
            ['name' => 'C++'],
            ['name' => 'SQL'],
            ['name' => 'JavaScript'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'Git'],
            ['name' => 'Linux'],
            ['name' => 'Data Structures'],
            ['name' => 'Algorithms'],
            ['name' => 'Problem Solving'],
            ['name' => 'Communication'],
            ['name' => 'Collaboration'],
            ['name' => 'Leadership'],
            ['name' => 'Time Management'],
            ['name' => 'Adaptability'],
            ['name' => 'Creativity'],
            ['name' => 'Critical Thinking'],
            ['name' => 'Problem Sensitivity']
        ];

        DB::table('skills')->insert($skills);
    }
}
