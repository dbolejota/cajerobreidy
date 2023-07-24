<?php

namespace Database\Factories;

use App\Models\transacciones;
use App\Models\cuentas;
use Illuminate\Database\Eloquent\Factories\Factory;

class transaccionesFactory extends Factory
{
    protected $model = transacciones::class;

    public function definition(): array
    {
        return [
            'id_cuentas' => cuentas::factory()->create()->id,
            'cantidad' => $this->faker->randomFloat(2, 0, 100000),
            'tipo_transaccion' => $this->faker->randomElement(['deposito', 'retiro']),
            'fecha_transaccion' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
