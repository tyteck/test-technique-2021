<?php

namespace Database\Factories;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $attributes['gender'] ?? $this->faker->numberBetween(1, 2);
        return [
            'firstname' => $attributes['firstname'] ?? $this->faker->firstName($gender === Candidat::CANDIDAT_GENDER_FEMALE ? 'female' : 'male'),
            'lastname' => $attributes['description'] ?? $this->faker->lastName,
            'gender' => $gender,
            'birthday' => now()->subYears($this->faker->numberBetween(20, 40)),
        ];
    }
}
