<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(NotificationsAndEventsSeeder::class);
        $this->call(CreateTriggers::class);
        $this->call(CreateFunctions::class);
    }
}
