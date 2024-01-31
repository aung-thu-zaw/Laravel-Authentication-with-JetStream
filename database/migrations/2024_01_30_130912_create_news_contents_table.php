<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('news_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_subcategory_id')->constrained();
            $table->foreignId('author_id')->constrained('users');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('content');
            $table->enum('type', ['article', 'video']);
            $table->string('thumbnail');
            $table->string('video_url')->nullable();
            $table->string('caption')->nullable();
            $table->integer('reading_time')->nullable();
            $table->enum('status', ['draft', 'published', 'archived']);
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('news_contents');
    }
};
