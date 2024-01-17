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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('api_token', 80)->unique()->nullable();
            $table->string('gender')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('available_on_whatsapp')->default(false);
            $table->string('city_from')->nullable();
            $table->string('current_city')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('study_status')->nullable();
            $table->string('has_computer_and_internet')->default(false);
            $table->string('skill_experience')->nullable();
            $table->string('how_did_you_hear_about_us')->nullable();
            $table->string('acknowledge_terms_and_privacy')->default(false);
            $table->string('contact_me_about_application')->default(false);
            $table->integer('marks')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('marks');
        });
    }
};