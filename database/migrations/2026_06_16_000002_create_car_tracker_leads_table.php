<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('car_tracker_leads', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_code')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('car_make')->nullable();
            $table->string('car_model')->nullable();
            $table->string('car_year')->nullable();
            $table->string('car_usage')->nullable();
            $table->string('preferred_call_time')->nullable();
            $table->string('status')->nullable();
            $table->text('api_response')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_tracker_leads');
    }
};
