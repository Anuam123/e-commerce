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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_link')->nullable();
            $table->string('banner_images')->nullable();
            $table->string('sort_order')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', ['Show', 'Hide'])->default('Hide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};
