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
            ['name' => 'Java', 'type' => 'technical'],
            ['name' => 'Python', 'type' => 'technical'],
            ['name' => 'C++', 'type' => 'technical'],
            ['name' => 'SQL', 'type' => 'technical'],
            ['name' => 'JavaScript', 'type' => 'technical'],
            ['name' => 'HTML', 'type' => 'technical'],
            ['name' => 'CSS', 'type' => 'technical'],
            ['name' => 'Git', 'type' => 'technical'],
            ['name' => 'Linux', 'type' => 'technical'],
            ['name' => 'Data Structures', 'type' => 'technical'],
            ['name' => 'Algorithms', 'type' => 'technical'],
            ['name' => 'Problem Solving', 'type' => 'soft'],
            ['name' => 'Communication', 'type' => 'soft'],
            ['name' => 'Collaboration', 'type' => 'soft'],
            ['name' => 'Leadership', 'type' => 'soft'],
            ['name' => 'Time Management', 'type' => 'soft'],
            ['name' => 'Adaptability', 'type' => 'soft'],
            ['name' => 'Creativity', 'type' => 'soft'],
            ['name' => 'Critical Thinking', 'type' => 'soft'],
            ['name' => 'Problem Sensitivity', 'type' => 'soft']
        ];

        DB::table('skills')->insert($skills);
    }
}
