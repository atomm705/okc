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
        Schema::create('new_price_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('price_id');
            $table->char('locale');
            $table->char('name');
            $table->char('price')->nullable();
            $table->char('price_promo')->nullable();
            $table->char('time')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_price_translations');
    }
};
