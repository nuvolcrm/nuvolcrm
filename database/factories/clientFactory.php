<?php

namespace Database\Factories;

use App\Models\client;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'dni' => $this->faker->randomDigit(), 
            'caduca' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'nombre' => $this->faker->word(), 
            'apellido1' => $this->faker->word(), 
            'apellido2' => $this->faker->word(), 
            'alias' => $this->faker->word(), 
            'keywords' => $this->faker->word(), 
            'cuenta' => $this->faker->word(), 
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'direccion' => $this->faker->word(), 
            'poblacion' => $this->faker->word(), 
            'telefono' => $this->faker->word(), 
            'idioma' => $this->faker->word(), 
            'email' => $this->faker->word(), 
            'mailing' => $this->faker->randomDigit(), 
            'segmento' => $this->faker->word()
        ];
    }
}
