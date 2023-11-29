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
        Schema::create('in_site_course_days', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->time('from');
            $table->time('to');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('in_site_courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_site_course_days');
    }
};
