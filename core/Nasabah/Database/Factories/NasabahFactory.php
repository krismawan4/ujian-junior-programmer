<?php

namespace Core\Nasabah\Database\Factories;

use Core\Nasabah\Models\Nasabah as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class NasabahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->text(100),
            'tempat_lahir' => $this->faker->text(100),
            'tanggal_lahir' => $this->faker->date(),
            'penghasilan' => $this->faker->integer(),

        ];
    }
}
