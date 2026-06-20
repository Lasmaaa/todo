<?php

namespace Database\Factories;

use App\Models\Diary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Diary>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        "title" => $this->faker->sentence(8),
        "body" => $this->faker->sentence(20),
        "date" => $this->faker->dateTime(20),
        "completed" => $this->faker->boolean(),
        "priority" => $this->faker->randomElement(['low', 'medium', 'high']) // konkrētas 
    ];
}
}
