<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\billetes>
 */
class billetesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idiomas_id' => $idiomas->id,
            'nombre' =>$this->$faker->nombre(),
            'valor' =>$this->$faker->valor()
        ];
    }
}
