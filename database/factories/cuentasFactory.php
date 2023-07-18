<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuentas>
 */
class cuentasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' =>$this->$faker->nombres(),
            'numero_cuenta' =>$this->$faker->numero_cuenta(),
            'pin' =>$this->$faker->pin(),
            'saldo' =>$this->$faker->saldo()
        ];
    }
}
