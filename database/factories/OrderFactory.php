<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'user_id' => $this->faker->numberBetween(1, 10), 
          // 'user_id' => \App\Models\User::factory(),
            'order_number' => strtoupper($this->faker->bothify('ORD-######')), 
            'total_amount' => $this->faker->randomFloat(2, 50, 5000), 
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'canceled', 'failed']),
            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'failed', 'refunded']),
            'shipping_address' => $this->faker->address,
            'billing_address' => $this->faker->optional()->address,
            'payment_method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'shipped_at' => $this->faker->optional()->dateTimeBetween('-1 week', 'now'), 
            'canceled_at' => $this->faker->optional()->dateTimeBetween('-1 month', '-1 week'), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
