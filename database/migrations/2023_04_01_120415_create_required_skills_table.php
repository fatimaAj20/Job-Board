<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
        {  
        
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employerId");
            $table->foreign("employerId")->references("id")->on("employers");
            $table->string("title");
            $table->string("description");
            $table->string("location");
            $table->unsignedDouble("salary");
            $table->integer("applied");
            $table->integer("vacant");
            $table->string("category");
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->timestamps();
        });

        Schema::create('required_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("jobId");
            $table->foreign("jobId")->references("id")->on("job_posts");
            $table->unsignedBigInteger("skillId");
            $table->foreign("skillId")->references("id")->on("skills");
            $table->string("importance");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('required_skills');
        Schema::dropIfExists('job_posts');
        Schema::dropIfExists('skills');
    }
};
