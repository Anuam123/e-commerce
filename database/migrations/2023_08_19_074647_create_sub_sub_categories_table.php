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
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sub_category_id')->unsigned()->index()->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('category_names')->nullable();
            $table->string('sub_category_names')->nullable();
            $table->string('link_type')->nullable();
            $table->string('custom_link')->nullable();
            $table->string('sub_sub_category_name')->nullable();
            $table->text('sub_sub_category_image')->nullable();
            $table->string('sort_order')->nullable();
            $table->enum('status', ['Show', 'Hide'])->default('Hide');
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
        Schema::dropIfExists('sub_sub_categories');
    }
};
