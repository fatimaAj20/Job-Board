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
        Schema::create('seeker_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("skillId");
            $table->foreign("skillId")->references("id")->on("skills");
            $table->unsignedBigInteger("seekerId");
            $table->foreign("seekerId")->references("id")->on("seekers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seeker_skills');
    }
};
