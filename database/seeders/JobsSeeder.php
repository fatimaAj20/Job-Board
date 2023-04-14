<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobPosts = [
            ['id'=>1, 'employerId' => '1', 'Title'=> 'Job Post 1', 'description'=>'This is the description for job 1', 'location'=>'beirut', 'salary'=>10000, 'applied'=>4, 'vacant'=>0, 'category'=>'software', 'created_at' => '2023-03-01'],
            ['id'=>2, 'employerId' => '1', 'Title'=> 'Job Post 2', 'description'=>'This is the description for job 2', 'location'=>'beirut', 'salary'=>10000, 'applied'=>0, 'vacant'=>0, 'category'=>'software', 'created_at' => '2023-03-02'],
            ['id'=>3, 'employerId' => '2', 'Title'=> 'Job Post 3', 'description'=>'This is the description for job 3', 'location'=>'saida', 'salary'=>20000, 'applied'=>4, 'vacant'=>0, 'category'=>'software', 'created_at' => '2023-03-03'],
            ['id'=>4, 'employerId' => '2', 'Title'=> 'Job Post 4', 'description'=>'This is the description for job 4', 'location'=>'saida', 'salary'=>20000, 'applied'=>0, 'vacant'=>0, 'category'=>'software', 'created_at' => '2023-03-04'],
            ['id'=>5, 'employerId' => '3', 'Title'=> 'Job Post 5', 'description'=>'This is the description for job 5', 'location'=>'trablous', 'salary'=>30000, 'applied'=>4, 'vacant'=>0, 'category'=>'mechanical', 'created_at' => '2023-03-05'],
            ['id'=>6, 'employerId' => '3', 'Title'=> 'Job Post 6', 'description'=>'This is the description for job 6', 'location'=>'trablous', 'salary'=>30000, 'applied'=>0, 'vacant'=>0, 'category'=>'mechanical', 'created_at' => '2023-03-06'],
            ['id'=>7, 'employerId' => '1', 'Title'=> 'Job Post 7', 'description'=>'This is the description for job 7', 'location'=>'nabatieh', 'salary'=>40000, 'applied'=>4, 'vacant'=>0, 'category'=>'mechanical', 'created_at' => '2023-03-07'],
            ['id'=>8, 'employerId' => '1', 'Title'=> 'Job Post 8', 'description'=>'This is the description for job 8', 'location'=>'nabatieh', 'salary'=>40000, 'applied'=>0, 'vacant'=>0, 'category'=>'electrical', 'created_at' => '2023-03-08'],
            ['id'=>9, 'employerId' => '1', 'Title'=> 'Job Post 9', 'description'=>'This is the description for job 9', 'location'=>'jounieh', 'salary'=>50000, 'applied'=>4, 'vacant'=>1, 'category'=>'electrical', 'created_at' => '2023-03-09'],
            ['id'=>10, 'employerId' => '1', 'Title'=> 'Job Post 10', 'description'=>'This is the description for job 10', 'location'=>'jounieh', 'salary'=>50000, 'applied'=>0, 'vacant'=>1, 'category'=>'electrical', 'created_at' => '2023-03-10'],
        ];

        $jobApplications =[
            ['id'=>1,'jobId'=>1, "seekerId" => 1, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>2,'jobId'=>1, "seekerId" => 2, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>3,'jobId'=>1, "seekerId" => 3, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>4,'jobId'=>1, "seekerId" => 4, 'status'=>2, 'created_at' => '2023-03-04'],
            ['id'=>21,'jobId'=>1, "seekerId" => 5, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>22,'jobId'=>1, "seekerId" => 6, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>23,'jobId'=>1, "seekerId" => 7, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>24,'jobId'=>1, "seekerId" => 8, 'status'=>2, 'created_at' => '2023-03-04'],
            
            ['id'=>5,'jobId'=>2, "seekerId" => 5, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>6,'jobId'=>2, "seekerId" => 6, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>7,'jobId'=>2, "seekerId" => 7, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>8,'jobId'=>2, "seekerId" => 8, 'status'=>2, 'created_at' => '2023-03-04'],
            
            ['id'=>9,'jobId'=>3, "seekerId" => 9, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>10,'jobId'=>3, "seekerId" => 10, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>11,'jobId'=>3, "seekerId" => 1, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>12,'jobId'=>3, "seekerId" => 2, 'status'=>2, 'created_at' => '2023-03-04'],

            ['id'=>13,'jobId'=>4, "seekerId" => 3, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>14,'jobId'=>4, "seekerId" => 4, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>15,'jobId'=>4, "seekerId" => 5, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>16,'jobId'=>4, "seekerId" => 6, 'status'=>2, 'created_at' => '2023-03-04'],

            ['id'=>17,'jobId'=>5, "seekerId" => 7, 'status'=>2, 'created_at' => '2023-03-01'],
            ['id'=>18,'jobId'=>5, "seekerId" => 8, 'status'=>2, 'created_at' => '2023-03-02'],
            ['id'=>19,'jobId'=>5, "seekerId" => 9, 'status'=>2, 'created_at' => '2023-03-03'],
            ['id'=>20,'jobId'=>5, "seekerId" => 10, 'status'=>2, 'created_at' => '2023-03-04'],
        ];

        DB::table('job_posts')->insert($jobPosts);
        DB::table('job_applications')->insert($jobApplications);
    }
}
