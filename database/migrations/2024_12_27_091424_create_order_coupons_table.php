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
        Schema::create('order_coupons', function (Blueprint $table) {
            $table->id();
            $table->string('unique_code',50)->unique();           
            $table->text('description')->nullable();      
            $table->enum('discount_type',['percentage','fixed'])->default('percentage');   
            $table->decimal('discount_value',10,2);              
            $table->decimal('min_order_value',10,2)->default(0);  
            $table->decimal('max_discount',10,2)->nullable();   
            $table->date('start_date'); 
            $table->date('end_date'); 
            $table->integer('usage_limit')->nullable();
            $table->integer('usage_count')->default(0); 
            $table->enum('status', ['active', 'inactive'])->default('active'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_coupons');
    }
};
