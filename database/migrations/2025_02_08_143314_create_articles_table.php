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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('main_category_id')->constrained('categories');
            $table->string('title');
            $table->string('titre');
            $table->string('alias')->unique();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('intro_text')->nullable();
            $table->longText('body')->nullable();
            $table->boolean('publish')->default(false);
            $table->boolean('comment_status')->default(false);
            $table->integer('comment_count')->default(0);
            $table->integer('hits')->default(0);
            $table->boolean('index')->default(1);
            $table->boolean('follow')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
