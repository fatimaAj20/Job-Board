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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("jobId");
            $table->foreign("jobId")->references("id")->on("job_posts");
            $table->unsignedBigInteger("seekerId");
            $table->foreign("seekerId")->references("id")->on("seekers");
            $table->string("resume");
            $table->string("status");
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
