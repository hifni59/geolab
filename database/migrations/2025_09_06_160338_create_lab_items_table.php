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
        Schema::create('lab_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_category_id')->constrained()->onDelete('cascade');
            $table->string('name')->comment('Nama kimia dengan format standar, cth: SiO2');
            $table->string('aliases')->nullable()->comment('Nama lain atau keyword untuk pencarian, dipisah koma, cth: Air, Water');
            $table->unsignedInteger('price');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_items');
    }
};
