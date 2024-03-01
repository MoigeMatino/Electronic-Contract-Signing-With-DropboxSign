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
        Schema::create('envelopes', function (Blueprint $table) {
            $table->string('EnvelopeId')->primary();
            $table->string('EmailAddress');
            $table->text('EnvelopSubject');
            $table->string('Sender');
            $table->string('EnvelopeStatus')->default('sent');
            $table->dateTime('EnvelopeCreatedAt')->nullable();
            $table->string('SentInitial')->nullable();
            $table->string('LastSent')->nullable();
            $table->string('Completed')->nullable();
            $table->string('Narration')->nullable();
            $table->unsignedBigInteger('CreatedBy');
            $table->timestamps();
            $table->foreign('CreatedBy')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envelopes');
    }
};
