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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Foreign key to `orders`
            $table->unsignedBigInteger('product_id'); // Foreign key to `products`
            $table->integer('quantity'); // Quantity of the product
            $table->decimal('price', 10, 2); // Price per unit
            $table->decimal('total_price', 10, 2); // Total price (quantity * price)
            $table->timestamps(); // Created at and updated at

            // Foreign key reference to the `orders` table
           // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            // Foreign key reference to the `products` table
           // $table->foreign('product_id')->references('id')->on('product_generals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
