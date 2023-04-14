<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateFunctions extends Seeder
{
    public function run(): void
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `get_job_posts_by_location_and_skills`(IN `seeker_id` BIGINT(20) UNSIGNED)
        SELECT jp.id, jp.title, jp.location
                                FROM job_posts jp
                                JOIN required_skills rs ON jp.id = rs.jobId
                                JOIN seeker_skills ss ON rs.skillId = ss.skillId
                                WHERE jp.location = (SELECT location FROM seekers WHERE id = seeker_id)
                                OR ss.seekerId = seeker_id
                                GROUP BY jp.id");

        DB::unprepared("CREATE DEFINER=`root`@`localhost` FUNCTION `getSeekerName`(`SeekerId` INT) RETURNS varchar(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci
                        return (SELECT U.name FROM seekers AS S , users AS U
                        where S.userId=U.id AND S.id=SeekerId)");

        DB::unprepared("CREATE DEFINER=`root`@`localhost` FUNCTION `getEmployerName`(`employerId` BIGINT(20) UNSIGNED) RETURNS varchar(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci
        return (SELECT U.name FROM employers AS E , users AS U
        where E.userId=U.id AND E.id=employerId)");

        DB::unprepared("CREATE DEFINER=`root`@`localhost` FUNCTION `get_skill_matches`(`job_id` BIGINT(20), `seeker_id` BIGINT(20)) RETURNS int(10) unsigned
                        return (SELECT COUNT(*) 
                        FROM seeker_skills
                        WHERE seekerId = seeker_id
                        AND skillId IN (
                            SELECT skillId
                            FROM required_skills
                            WHERE jobId = job_id
                        ))");
    }
}
