<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('calendar_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('calendar_category_id')->constrained('calendar_categories');
            $table->string('title');
            $table->foreignUuid('location_id')->constrained('locations');
            $table->string('start');
            $table->string('end');
            $table->boolean('full_day')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar_items');
    }
};
