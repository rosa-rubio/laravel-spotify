<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'artist' => fake()->name(),
        'title' => fake()->sentence(),
        'album' => fake()->sentence(),
        'image' => fake()->imageUrl($width=50, $height=50),
        'date' => fake()->date(),
        'duration' => fake()->regexify('\d{2}:\d{2}'),
        ];
    }
}
