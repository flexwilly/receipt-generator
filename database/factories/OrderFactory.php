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
            'order_num'=>'#3738920089',
            'event_id'=>fake()->numberBetween(1,10),
            'event_name'=>fake()->text(),
            'event_date'=>'2024-10-23',
            'ticket_id'=>fake()->unique()->numberBetween(1,5),
            'ticket_cost'=>fake()->numberBetween(1,8),
            //'event_tickets'=>fake()->randomDigit(),
        ];
    }
}
