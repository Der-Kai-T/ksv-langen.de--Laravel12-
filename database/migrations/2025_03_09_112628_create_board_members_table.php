<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('board_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('function')->nullable();
            $table->foreignUuid('board_id')->constrained('boards');
            $table->foreignUuid('person_id')->constrained('people');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('board_members');
    }
};
