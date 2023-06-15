<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Publicaciones;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicaciones>
 */
class PublicacionesFactory extends Factory
{
    protected $model = Publicaciones::class;

    public function definition()
    {
        return [

            'titulo' => $this->faker->title,

            'descripcion' => $this->faker->text(255),
            'beneficios' => $this->faker->text(255),
            'procedimiento' => $this->faker->text(255),
        ];
    }
}








