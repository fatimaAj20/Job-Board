<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsAndEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['userId'=>12, 'event_type'=>'Adding job', 'created_at' =>  '2023-03-05'],
            ['userId'=>12, 'event_type'=>'Adding job', 'created_at' =>  '2023-03-05'],
            ['userId'=>12, 'event_type'=>'Adding job', 'created_at' =>  '2023-03-05'],
            ['userId'=>12, 'event_type'=>'Deleting job', 'created_at' =>  '2023-03-05'],
            ['userId'=>12, 'event_type'=>'Updating job', 'created_at' =>  '2023-03-05'],
        ];

        $reg_requests = [
            ['employerId'=>2, 'status'=>1, 'created_at' =>  '2023-03-05'],
            ['employerId'=>3, 'status'=>1, 'created_at' =>  '2023-03-01'],
            ['employerId'=>4, 'status'=>1, 'created_at' =>  '2023-03-04'],
            ['employerId'=>5, 'status'=>1, 'created_at' =>  '2023-03-02'],
        ];

        $notifications =[
            ['userId'=>12, 'message' => 'New job application recieved','created_at' =>  '2023-03-01'],
            ['userId'=>12, 'message' => 'New job application recieved','created_at' =>  '2023-03-04'],
            ['userId'=>12, 'message' => 'New job application recieved','created_at' =>  '2023-03-05'],
            ['userId'=>2, 'message' => 'your application is rejected','created_at' =>  '2023-03-01'],
            ['userId'=>2, 'message' => 'your application is accepted','created_at' =>  '2023-03-04'],
            ['userId'=>2, 'message' => 'your application is rejected','created_at' =>  '2023-03-05'],
        ];
        DB::table('event_summaries')->insert($events);
        DB::table('employer_registration_requests')->insert($reg_requests);
        DB::table('notifications')->insert($notifications);
    }
}
