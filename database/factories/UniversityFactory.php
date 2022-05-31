<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(["name" => "string", "city" => "string", "address" => "string"])] public function definition(): array
    {
        return [
            "name" => $this->faker->company,
            "city" => $this->faker->city,
            "address" => $this->faker->address
        ];
    }
}
