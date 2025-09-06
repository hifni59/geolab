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
        Schema::create('equipment_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('brand')->comment('Merk');
            $table->year('year')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedInteger('daily_rate')->comment('Tarif per hari');
            $table->unsignedInteger('monthly_rate')->comment('Tarif per 30 hari');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_items');
    }
};
