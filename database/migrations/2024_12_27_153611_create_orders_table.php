<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // For logged-in users
            $table->string('order_number')->unique(); // Unique order number
            $table->decimal('total_amount', 10, 2); // Total amount of the order
            $table->enum('status', ['pending', 'processing', 'completed', 'canceled', 'failed'])->default('pending'); // Order status
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending'); // Payment status
            $table->text('shipping_address'); // Shipping address
            $table->text('billing_address')->nullable(); // Billing address (nullable)
            $table->string('payment_method'); // Payment method (e.g., credit card, PayPal)
            $table->timestamps(); // Created at and updated at
            $table->timestamp('shipped_at')->nullable(); // Shipped timestamp (nullable)
            $table->timestamp('canceled_at')->nullable(); // Canceled timestamp (nullable)

            // Foreign key reference to the `users` table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
