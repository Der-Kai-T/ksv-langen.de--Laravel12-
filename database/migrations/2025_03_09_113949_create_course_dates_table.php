<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('course_dates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('course_id')->constrained('courses');
            $table->foreignUuid('location_id')->constrained('locations');
            $table->integer('day');
            $table->string('start');
            $table->string('end');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_dates');
    }
};
