<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('licence')->nullable();
            $table->string('function')->nullable();
            $table->string('working_time')->nullable();
            $table->foreignUuid('training_offers_id')->constrained('training_offers');
            $table->foreignUuid('person_id')->constrained('people');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
