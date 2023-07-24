<?php

namespace Database\Factories;

use App\Models\idiomas;
use Illuminate\Database\Eloquent\Factories\Factory;

class idiomasFactory extends Factory
{
    protected $model = idiomas::class;

    // Definir los nombres de idiomas que deseas utilizar
    protected $nombres = ['Español', 'Inglés', 'Francés', 'Alemán',
    'Italiano', 'Portugués', 'Ruso', 'Chino', 'Japonés', 'Árabe', 
    'Griego', 'Hebreo', 'Finlandés', 'Eslovaco', 'Turco', 'Checo', 'Maratí'];

    public function definition(): array
    {
        // Usamos el método 'shuffle' para mezclar el array de nombres
        shuffle($this->nombres);

        return [
            'nombre' => array_pop($this->nombres)
        ];
    }
}
