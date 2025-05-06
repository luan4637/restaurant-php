<?php

namespace App\Core\Restaurant;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<UserModel>
 */
class RestaurantModelFactory extends Factory
{
    protected $model = RestaurantModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'desc' => fake()->paragraph(1),
            'image' => fake()->imageUrl(400, 300),
            'rating' => fake()->randomFloat(1, 1, 5),
            'rating_count' => fake()->numberBetween(100, 200),
            'isFavorite' => false
        ];
    }
}
