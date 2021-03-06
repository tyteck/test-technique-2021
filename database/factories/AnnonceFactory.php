<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Annonce::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(array $attributes = [])
    {
        return [
            'title' => $attributes['title'] ?? $this->faker->words(3, true),
            'description' => $attributes['description'] ?? $this->faker->paragraph(3),
        ];
    }
}
