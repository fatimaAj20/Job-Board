<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateTriggers extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::unprepared("CREATE TRIGGER `added_application` AFTER INSERT ON `job_applications`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM seekers S, job_applications jp WHERE S.id= jp.seekerId AND jp.id = NEW.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'added application', now());
 END");

        DB::unprepared("CREATE TRIGGER `adding_job` AFTER INSERT ON `job_posts`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM employers E, job_posts jp WHERE E.id= jp.employerId AND jp.id = NEW.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'adding job', now());
 END");

        DB::unprepared("CREATE TRIGGER `check_salary` BEFORE INSERT ON `job_posts`
 FOR EACH ROW IF NEW.salary < 1000 THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Salary cannot be     less than 1000';
  END IF");

        DB::unprepared("CREATE TRIGGER `deleted_application` Before Delete ON `job_applications`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM seekers S, job_applications jp WHERE S.id= jp.seekerId AND jp.id = OLD.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'deleted application', now());
 END");

        DB::unprepared("CREATE TRIGGER `deleting_Job` Before Delete ON `job_posts`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM employers E, job_posts jp WHERE E.id= jp.employerId AND jp.id = OLD.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'deleting job', now());
 END");

        DB::unprepared("CREATE TRIGGER `modified_application` AFTER UPDATE ON `job_applications`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM seekers S, job_applications jp WHERE S.id= jp.seekerId AND jp.id = NEW.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'modified application', now());
 END");

        DB::unprepared("CREATE TRIGGER `send_Notification_Employer` AFTER INSERT ON `job_applications`
 FOR EACH ROW BEGIN
DECLARE employer_id bigint;
DECLARE user_id bigint;
SELECT employerId INTO employer_id FROM job_posts where jobId=New.jobId;
SELECT userId INTO user_id FROM employers where id=employer_id;
INSERT INTO notifications(userId, message)VALUES(user_id,'New job application recieved');
END");

        DB::unprepared("CREATE TRIGGER `send_Notification_Seeker` AFTER UPDATE ON `job_applications`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
  SELECT userId INTO user_id FROM seekers WHERE id= NEW.seekerId;
IF NEW.status = 0 THEN
   INSERT INTO notifications (userId, message) VALUES (user_id, 'your application is rejected');
  ELSEIF NEW.status = 1 THEN
   INSERT INTO notifications (userId, message) VALUES (user_id, 'your application is accepted');
  END IF;
END");

        DB::unprepared("CREATE TRIGGER `updateStatus` AFTER UPDATE ON `employer_registration_requests`
 FOR EACH ROW IF NEW.status = 0 THEN
    UPDATE employers
    SET active = 0
    WHERE employers.id = NEW.employerId;
  ELSEIF NEW.status = 2 THEN
    UPDATE employers
    SET active = 1
    WHERE employers.id = NEW.employerId;
  END IF");

        DB::unprepared("CREATE TRIGGER `updating job` AFTER UPDATE ON `job_posts`
 FOR EACH ROW BEGIN
DECLARE user_id bigint;
SELECT userId INTO user_id FROM employers E, job_posts jp WHERE E.id= jp.employerId AND jp.id = NEW.id;
 INSERT INTO event_summaries (userId, event_Type, created_at) VALUES (user_id , 'updating job', now());
 END");
    }
}
