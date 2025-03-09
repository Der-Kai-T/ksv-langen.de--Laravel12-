<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('news_id')->constrained('news');
            $table->boolean('is_header');
            $table->text('alt');
            $table->text('cop')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news_images');
    }
};
