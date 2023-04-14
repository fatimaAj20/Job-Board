<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // password is 'test' but it is encrypted
        $users = [
            ['id'=>1, 'name' => 'Admin', "email"=>"admin@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>1],
            
            ['id'=>2, 'name' => 'Seeker1', "email"=>"seeker1@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>3, 'name' => 'Seeker2', "email"=>"seeker2@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>4, 'name' => 'Seeker3', "email"=>"seeker3@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>5, 'name' => 'Seeker4', "email"=>"seeker4@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>6, 'name' => 'Seeker5', "email"=>"seeker5@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>7, 'name' => 'Seeker6', "email"=>"seeker6@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>8, 'name' => 'Seeker7', "email"=>"seeker7@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>9, 'name' => 'Seeker8', "email"=>"seeker8@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>10, 'name' => 'Seeker9', "email"=>"seeker9@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            ['id'=>11, 'name' => 'Seeker10', "email"=>"seeker10@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>3],
            
            ['id'=>12, 'name' => 'Employer1', "email"=>"employer1@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>2],
            ['id'=>13, 'name' => 'Employer2', "email"=>"employer2@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>2],
            ['id'=>14, 'name' => 'Employer3', "email"=>"employer3@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>2],
            ['id'=>15, 'name' => 'Employer4', "email"=>"employer4@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>2],
            ['id'=>16, 'name' => 'Employer5', "email"=>"employer5@gmail.com", "password"=>"$2y$10$8X5.V0CL6xp4sNtYgIdbC.0MdLfOSqDzTcT9amI5qP1hQRITKc9nu", "role"=>2]
        ];

        $seekers =[
            ['id'=>1, "userId" => 2, 'birthday'=>'2002-03-01', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 1'],
            ['id'=>2, "userId" => 3, 'birthday'=>'2002-03-02', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 2'],
            ['id'=>3, "userId" => 4, 'birthday'=>'2002-03-03', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 3'],
            ['id'=>4, "userId" => 5, 'birthday'=>'2002-03-04', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 4'],
            ['id'=>5, "userId" => 6, 'birthday'=>'2002-03-05', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 5'],
            ['id'=>6, "userId" => 7, 'birthday'=>'2002-03-06', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 6'],
            ['id'=>7, "userId" => 8, 'birthday'=>'2002-03-07', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 7'],
            ['id'=>8, "userId" => 9, 'birthday'=>'2002-03-08', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 8'],
            ['id'=>9, "userId" => 10, 'birthday'=>'2002-03-09', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 9'],
            ['id'=>10, "userId" => 11, 'birthday'=>'2002-03-10', 'location'=>'beirut', 'profile_picture'=>'/storage/public/profile_pictures/1.png', 'resume'=> '/storage/resumes/resume.txt', 'about'=>'about section for seeker1 10'],
        ];

        $employers = [
            ['id'=>1, "userId" =>12,'websiteLink'=>'www.employer1.com', 'description' => 'This is description for employer 1', 'logo' =>'/storage/public/logos/logo.webp', 'location' => 'beirut', 'active'=>1, 'lebanonCreftificateOfIncorporation'=>'/storage/public/certificates/certificate.txt', 'registrationNumber'=>1, 'created_at' =>'2002-03-01'],
            ['id'=>2, "userId" =>13,'websiteLink'=>'www.employer2.com', 'description' => 'This is description for employer 2', 'logo' =>'/storage/public/logos/logo.webp', 'location' => 'beirut', 'active'=>0, 'lebanonCreftificateOfIncorporation'=>'/storage/public/certificates/certificate.txt', 'registrationNumber'=>2, 'created_at' =>'2002-03-02'],
            ['id'=>3, "userId" =>14,'websiteLink'=>'www.employer3.com', 'description' => 'This is description for employer 3', 'logo' =>'/storage/public/logos/logo.webp', 'location' => 'beirut', 'active'=>0, 'lebanonCreftificateOfIncorporation'=>'/storage/public/certificates/certificate.txt', 'registrationNumber'=>3, 'created_at' =>'2002-03-03'],
            ['id'=>4, "userId" =>15,'websiteLink'=>'www.employer4.com', 'description' => 'This is description for employer 4', 'logo' =>'/storage/public/logos/logo.webp', 'location' => 'beirut', 'active'=>0, 'lebanonCreftificateOfIncorporation'=>'/storage/public/certificates/certificate.txt', 'registrationNumber'=>4, 'created_at' =>'2002-03-04'],
            ['id'=>5, "userId" =>16,'websiteLink'=>'www.employer5.com', 'description' => 'This is description for employer 5', 'logo' =>'/storage/public/logos/logo.webp', 'location' => 'beirut', 'active'=>0, 'lebanonCreftificateOfIncorporation'=>'/storage/public/certificates/certificate.txt', 'registrationNumber'=>5, 'created_at' =>'2002-03-05']

        ];

        DB::table('users')->insert($users);
        DB::table('seekers')->insert($seekers);
        DB::table('employers')->insert($employers);
    }
}
