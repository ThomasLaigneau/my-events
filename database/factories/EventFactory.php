<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->dateTime,
            'end_date' => $this->faker->dateTime,
            'location' => $this->faker->address,
            'capacity' => $this->faker->numberBetween(50, 200),
            'price' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
