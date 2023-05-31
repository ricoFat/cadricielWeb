<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'date_de_naissance' => $this->faker->date(),
            'villes_id' => function () {
                return Ville::inRandomOrder()->first()->id;
            },
        ];
    }
}
