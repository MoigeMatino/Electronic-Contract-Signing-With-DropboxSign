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
        Schema::create('recipients', function (Blueprint $table) {
            $table->id();
            $table->string('RecipientName');
            $table->string('RecipientEmail');
            $table->string('RecipientType');
            $table->string('RecipientRoutingOrder');
            $table->string('RecipientStatus');
            $table->string('RecipientNarration');
            $table->string('EnvelopeId');
            $table->foreign('EnvelopeId')->references('EnvelopeId')->on('envelopes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipients');
    }
};
