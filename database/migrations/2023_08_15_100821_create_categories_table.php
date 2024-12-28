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
            $table->string('category_name')->nullable();
            $table->text('category_image')->nullable();
            $table->string('sort_order')->nullable();
            $table->enum('status', ['Show', 'Hide'])->default('Hide');
            $table->enum('show_on_home', ['Yes', 'No'])->default('No');
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('description')->nullable();
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
