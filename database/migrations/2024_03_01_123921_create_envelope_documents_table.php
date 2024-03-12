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
        Schema::create('envelope_documents', function (Blueprint $table) {
            $table->id();
            $table->string('EnvelopeId');
            $table->string('Document');
            $table->foreign('EnvelopeId')->references('EnvelopeId')->on('envelopes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envelope_documents');
    }
};
