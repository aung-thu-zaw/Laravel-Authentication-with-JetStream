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
        Schema::disableForeignKeyConstraints();

        Schema::create('reel_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('thumbnail');
            $table->string('video_url')->nullable();
            $table->enum('status', ['draft', 'published', 'archived']);
            $table->timestamp('published_at')->nullable();
            $table->integer('view')->default(0);
            $table->boolean('is_top')->default(false);
            $table->boolean('is_editors_pick')->default(false);
            $table->foreignId('topic_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reel_videos');
    }
};
