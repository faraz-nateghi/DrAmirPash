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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained('service_categories');
            $table->string('title');
            $table->string('alias')->unique();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('intro_text')->nullable();
            $table->longText('body')->nullable();
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('services');
    }
};
