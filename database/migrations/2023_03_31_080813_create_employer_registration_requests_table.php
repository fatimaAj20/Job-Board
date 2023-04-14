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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId");
            $table->foreign("userId")->references("id")->on("users");
            $table->string("websiteLink")->nullable();
            $table->string("description")->nullable();
            $table->string("logo")->nullable();
            $table->string("location")->nullable();
            $table->integer("active");
            $table->string("lebanonCreftificateOfIncorporation")->nullable();
            $table->string("registrationNumber")->nullable();
            $table->timestamps();
        });


        Schema::create('employer_registration_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employerId");
            $table->foreign("employerId")->references("id")->on("employers");
            $table->integer("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_registration_requests');
        Schema::dropIfExists('employers');
    }
};
