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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('total_time');
            $table->string('lectures');
            $table->string('img');
            $table->string('description');
            $table->string('what_you_learn');
            $table->string('requirments');
            $table->string('who_package_for');
            $table->string('enroll_message');
            $table->string('whatsapp');
            $table->string('google_meet');
            $table->string('zoom');
            $table->date('start');
            $table->date('end');
            $table->tinyInteger('certification');
            $table->string('certification_title');
            $table->decimal('price');
            $table->decimal('discount');
            $table->decimal('price_after_discount');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('part_id');
            $table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');
            $table->unsignedBigInteger('chapter_id');
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->unsignedBigInteger('lesson_id');
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
