<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'age' => fake()->numberBetween(20, 45),
            'city' => fake()->city()
        ];
    }
//     public function definition(): array
// {
//     return [
//         'name' => $this->faker->name(),
//         'email' => $this->faker->email(),
//         'age' => $this->faker->numberBetween(20, 45),
//         'city' => $this->faker->city()
//     ];
// }

}
