<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=>$this->faker->sentence,
            'contenu'=>$this->faker->paragraph(20),
            'date_de_creation' =>$this->faker->dateTimeBetween('1999-01-01', 'now')->format('YYYY-MM-DD'),
            'etudiant_id'=>Etudiant::factory()
        ];
    }
    
}
