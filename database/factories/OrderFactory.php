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
            //
            'order_by'=>fake()->name(),
            'event_num'=>fake()->numberBetween(1,10),
            'event_name'=>fake()->text(),
            'event_city'=>fake()->city(),
            'event_type'=>fake()->text(),
            'event_desc'=>fake()->text(),
            'event_cost'=>fake()->numberBetween(1,8),
            'event_tickets'=>fake()->randomDigit(),
        ];
    }
}
