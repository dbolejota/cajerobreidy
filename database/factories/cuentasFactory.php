<?php

namespace Database\Factories;

use App\Models\cuentas;
use Illuminate\Database\Eloquent\Factories\Factory;

class cuentasFactory extends Factory
{
    protected $model = cuentas::class;

    public function definition(): array
    {
        return [
            'nombres' => $this->faker->name(),
            'numero_cuenta' => $this->faker->unique()->numerify('########'),
            'pin' => $this->faker->numberBetween(1000, 9999),
            'saldo' => $this->faker->randomFloat(2, 0, 100000),
        ];
    }
}
