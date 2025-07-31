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
        Schema::table('services_categories_groups', function (Blueprint $table) {
            $table->tinyInteger('is_group')->default(1)->after('is_root');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_categories_groups', function (Blueprint $table) {
            $table->dropColumn('is_group');
        });
    }
};
