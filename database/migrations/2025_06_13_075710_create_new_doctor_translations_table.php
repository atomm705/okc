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
        Schema::create('new_doctor_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_id');
            $table->char('locale');
            $table->char('first_name');
            $table->char('second_name');
            $table->char('middle_name');
            $table->longText('position_main');
            $table->longText('position_all');
            $table->longText('educations')->nullable();
            $table->longText('courses')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('associations')->nullable();
            $table->longText('treatment_of_disease')->nullable();
            $table->longText('procedures')->nullable();
            $table->longText('specialisations')->nullable();
            $table->longText('about')->nullable();
            $table->longText('blog_caption')->nullable();
            $table->longText('page_seo');
            $table->integer('is_visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_doctor_translations');
    }
};
