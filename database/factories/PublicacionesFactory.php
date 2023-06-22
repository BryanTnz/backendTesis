<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Publicaciones;
use Faker\Generator;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicaciones>
 */
class PublicacionesFactory extends Factory
{
    protected $model = Publicaciones::class;

    public function definition()
    {
        $faker = app(Generator::class);

        return [
            

            'titulo' => $this->faker->sentence(),

            'descripcion' => $this->faker->realtext(255),
            'beneficios' => $this->faker->realtext(255),
            'procedimiento' => $this->faker->realtext(255),
        ];
    }
}










