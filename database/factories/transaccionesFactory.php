<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transacciones>
 */
class transaccionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_cuentas' =>$this->$faker->id_cuentas(),
            'cantidad' =>$this->$faker->cantidad(),
            'tipo_transaccion' =>$this-> $faker->tipo_transaccion(['deposito', 'retiro']),
            'fecha_transaccion' =>$this->$faker->fecha_transaccion(),
        ];
    }
}
