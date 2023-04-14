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
            ['id'=>1, "name" => 'Java'],
            ['id'=>2, "name" => 'Python'],
            ['id'=>3, "name" => 'C++'],
            ['id'=>4, "name" => 'SQL'],
            ['id'=>5, "name" => 'JavaScript'],
            ['id'=>6, "name" => 'HTML'],
            ['id'=>7, "name" => 'CSS'],
            ['id'=>8, "name" => 'Git'],
            ['id'=>9, "name" => 'Linux'],
            ['id'=>10, "name" => 'Data Structures'],
            ['id'=>11, "name" => 'Algorithms'],
            ['id'=>12, "name" => 'Problem Solving'],
            ['id'=>13, "name" => 'Communication'],
            ['id'=>14, "name" => 'Collaboration'],
            ['id'=>15, "name" => 'Leadership'],
            ['id'=>16, "name" => 'Time Management'],
            ['id'=>17, "name" => 'Adaptability'],
            ['id'=>18, "name" => 'Creativity'],
            ['id'=>19, "name" => 'Critical Thinking'],
            ['id'=>20, "name" => 'Problem Sensitivity']
        ];

        $reqSkills = [
            ['jobId'=>1, 'skillId'=>1],
            ['jobId'=>1, 'skillId'=>2],
            ['jobId'=>1, 'skillId'=>3],
            ['jobId'=>1, 'skillId'=>4],

            ['jobId'=>2, 'skillId'=>5],
            ['jobId'=>2, 'skillId'=>6],
            ['jobId'=>2, 'skillId'=>7],
            ['jobId'=>2, 'skillId'=>8],

            ['jobId'=>3, 'skillId'=>9],
            ['jobId'=>3, 'skillId'=>10],
            ['jobId'=>3, 'skillId'=>11],
            ['jobId'=>3, 'skillId'=>12],

            ['jobId'=>4, 'skillId'=>13],
            ['jobId'=>4, 'skillId'=>14],
            ['jobId'=>4, 'skillId'=>15],
            ['jobId'=>4, 'skillId'=>16],
        ];

        $seekerSkills =[
            ['skillId'=> 1, 'seekerId'=>1],
            ['skillId'=> 2, 'seekerId'=>1],
            ['skillId'=> 3, 'seekerId'=>1],
            ['skillId'=> 4, 'seekerId'=>1],
            ['skillId'=> 5, 'seekerId'=>1],
            ['skillId'=> 6, 'seekerId'=>1],

            ['skillId'=> 7, 'seekerId'=>2],
            ['skillId'=> 8, 'seekerId'=>2],
            ['skillId'=> 9, 'seekerId'=>2],
            ['skillId'=> 10, 'seekerId'=>2],
            ['skillId'=> 11, 'seekerId'=>2],
            ['skillId'=> 12, 'seekerId'=>2],

            ['skillId'=> 13, 'seekerId'=>3],
            ['skillId'=> 14, 'seekerId'=>3],
            ['skillId'=> 15, 'seekerId'=>3],
            ['skillId'=> 16, 'seekerId'=>3],
            ['skillId'=> 17, 'seekerId'=>3],
            ['skillId'=> 18, 'seekerId'=>3],

            ['skillId'=> 19, 'seekerId'=>4],
            ['skillId'=> 20, 'seekerId'=>4],
            ['skillId'=> 1, 'seekerId'=>4],
            ['skillId'=> 2, 'seekerId'=>4],
            ['skillId'=> 3, 'seekerId'=>4],
            ['skillId'=> 4, 'seekerId'=>4],

            ['skillId'=> 5, 'seekerId'=>5],
            ['skillId'=> 6, 'seekerId'=>5],
            ['skillId'=> 7, 'seekerId'=>5],
            ['skillId'=> 8, 'seekerId'=>5],
            ['skillId'=> 9, 'seekerId'=>5],
            ['skillId'=> 10, 'seekerId'=>5],

            ['skillId'=> 11, 'seekerId'=>6],
            ['skillId'=> 12, 'seekerId'=>6],
            ['skillId'=> 13, 'seekerId'=>6],
            ['skillId'=> 14, 'seekerId'=>6],
            ['skillId'=> 15, 'seekerId'=>6],
            ['skillId'=> 16, 'seekerId'=>6],

            ['skillId'=> 17, 'seekerId'=>7],
            ['skillId'=> 18, 'seekerId'=>7],
            ['skillId'=> 19, 'seekerId'=>7],
            ['skillId'=> 20, 'seekerId'=>7],
            ['skillId'=> 1, 'seekerId'=>7],
            ['skillId'=> 2, 'seekerId'=>7],

            ['skillId'=> 3, 'seekerId'=>8],
            ['skillId'=> 4, 'seekerId'=>8],
            ['skillId'=> 5, 'seekerId'=>8],
            ['skillId'=> 6, 'seekerId'=>8],
            ['skillId'=> 7, 'seekerId'=>8],
            ['skillId'=> 8, 'seekerId'=>8],

            ['skillId'=> 9, 'seekerId'=>9],
            ['skillId'=> 10, 'seekerId'=>9],
            ['skillId'=> 11, 'seekerId'=>9],
            ['skillId'=> 12, 'seekerId'=>9],
            ['skillId'=> 13, 'seekerId'=>9],
            ['skillId'=> 14, 'seekerId'=>9],

            
            ['skillId'=> 15, 'seekerId'=>10],
            ['skillId'=> 16, 'seekerId'=>10],
            ['skillId'=> 17, 'seekerId'=>10],
            ['skillId'=> 18, 'seekerId'=>10],
            ['skillId'=> 19, 'seekerId'=>10],
            ['skillId'=> 20, 'seekerId'=>10],
        ];

        DB::table('skills')->insert($skills);
        DB::table('required_skills')->insert($reqSkills);
        DB::table('seeker_skills')->insert($seekerSkills);
    }
}
