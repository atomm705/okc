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
        Schema::create('new_doctors', function (Blueprint $table) {
            $table->id();
            $table->char('slug');
            $table->char('photo_full')->nullable();
            $table->char('photo_square')->nullable();
            $table->integer('is_visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_doctors');
    }
};
