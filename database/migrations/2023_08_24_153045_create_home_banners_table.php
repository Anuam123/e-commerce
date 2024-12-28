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
        Schema::create('home_banners', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image_one')->nullable();
            $table->string('banner_image_two')->nullable();
            $table->string('banner_image_three')->nullable();
            $table->string('banner_image_four')->nullable();
            $table->string('banner_image_five')->nullable();
            $table->string('banner_image_six')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_banners');
    }
};
