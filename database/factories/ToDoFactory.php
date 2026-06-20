<?php

namespace Database\Factories;

use App\Models\ToDo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ToDo>
 */
class ToDoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        "content" => $this->faker->sentence(5),
        "completed" => $this->faker->boolean(),
        "priority" => $this->faker->randomElement(['low', 'medium', 'high']) // konkrētas 
    ];
}
}
