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
        Schema::create('karu_crm_leads', function (Blueprint $table) {
            $table->id();

            // Unique ID generated locally and sent to the CRM as external_source_id.
            // Allows us to correlate retries and detect duplicates without relying on the CRM.
            $table->uuid('external_source_id')->unique();

            // Customer identity — at least one is required by the CRM spec.
            $table->string('name');
            $table->string('phone', 30);
            $table->string('email');

            // Extended contact / address fields — all optional.
            $table->string('mobile', 30)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('street')->nullable();
            $table->string('province', 100)->nullable();
            $table->string('suburb', 100)->nullable();
            $table->string('post_code', 20)->nullable();

            // Free-text note forwarded to the CRM as remark_message.
            $table->text('remark_message')->nullable();

            // Arbitrary key/value bag (vehicle type, insurer, budget, etc.).
            $table->json('meta')->nullable();

            // Lead ID returned by Karu CRM after a successful submission.
            $table->string('karu_lead_id')->nullable()->index();

            // Full raw response body from the CRM — preserved for debugging and auditing.
            $table->json('crm_response')->nullable();

            // Submission lifecycle: pending → success | duplicate | failed.
            $table->enum('status', ['pending', 'success', 'duplicate', 'failed'])
                  ->default('pending')
                  ->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karu_crm_leads');
    }
};
