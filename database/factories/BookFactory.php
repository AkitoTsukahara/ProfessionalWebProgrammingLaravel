<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName . '本',
            'status' => $this->faker->randomElement(['lend', 'reserved', 'lost']),
            'isbn' => $this->faker->isbn13(),
            'published_date' => $this->faker->date,
            'price' => $this->faker->randomDigitNotNull
        ];
    }
}
