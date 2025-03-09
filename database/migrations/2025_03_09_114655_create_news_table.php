<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('headline');
            $table->text('subheadline')->nullable();
            $table->longText('content');
            $table->text('excerpt')->nullable();
            $table->string('author');
            $table->dateTime('date');
            $table->dateTime('publish_date')->nullable();
            $table->dateTime('unpublish_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
