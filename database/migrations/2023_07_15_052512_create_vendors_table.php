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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('is_vendor')->default(0);
            $table->string('user_name')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('shop_url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
