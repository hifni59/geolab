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
        Schema::create('sig_tiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sig_service_id')->constrained()->onDelete('cascade');
            $table->string('scale')->comment('Skala, e.g., 1:250.000');
            $table->unsignedInteger('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sig_tiers');
    }
};
