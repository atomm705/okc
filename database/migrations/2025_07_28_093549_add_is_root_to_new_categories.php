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
        Schema::table('new_categories', function (Blueprint $table) {
            $table->tinyInteger('is_root')->default(1)->after('is_visible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('new_categories', function (Blueprint $table) {
            $table->dropColumn('is_root');
        });
    }
};
