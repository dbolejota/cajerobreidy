<?php

namespace Database\Factories;

use App\Models\billetes;
use App\Models\idiomas;
use Illuminate\Database\Eloquent\Factories\Factory;

class billetesFactory extends Factory
{
    protected $model = billetes::class;

    public function definition(): array
    {
        return [
            'idiomas_id' => idiomas::factory()->create()->id,
            'nombre' => $this->faker->word(),
            'valor' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
