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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(-1);
            $table->integer('order')->default(0)->index();
            $table->string('title')->nullable();
            $table->string('titre')->nullable();
            $table->string('alias')->unique();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->longText('body')->nullable();
            $table->boolean('publish')->default(false);
            $table->boolean('blog')->default(false);
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
        Schema::dropIfExists('categories');
    }
};
