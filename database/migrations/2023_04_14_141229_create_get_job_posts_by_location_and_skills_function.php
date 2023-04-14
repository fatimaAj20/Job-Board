<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql = '
        CREATE FUNCTION get_job_posts_by_location_and_skills(seeker_id INT)
        RETURNS TABLE (
            id INT,
            title VARCHAR(255),
            location VARCHAR(255)
        )
        BEGIN
        RETURN QUERY SELECT jp.id, jp.title, jp.location
        FROM job_posts jp
        JOIN required_skills rs ON jp.id = rs.jobId
        JOIN seeker_skills ss ON rs.skillId = ss.skillId
        WHERE jp.location = (SELECT location FROM seekers WHERE id = seeker_id)
        OR ss.seekerId = seeker_id
        GROUP BY jp.id;
        END;
    ';
    DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_job_posts_by_location_and_skills_function');
    }
};
