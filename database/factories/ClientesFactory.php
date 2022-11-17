<?php

namespace Database\Factories;

use App\Models\Cliente;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClientesFactory extends Factory
{
    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = fake();
        return [
            'nombre' => $faker->firstName,
            'ap_paterno' => $faker->lastName,
            'ap_materno' => $faker->lastName,
            'fecha_nacimiento' => $faker->date,
            'fecha_alta' => $faker->date,
            'rfc' => $faker->swiftBicNumber,
            'correo_electronico' => $faker->unique()->safeEmail,
            'telefono' => $faker->phoneNumber,
            'dir_pais' => $faker->country,
            'dir_estado' => $faker->streetSuffix,
            'dir_colonia' => $faker->streetName,
            'dir_calle' => $faker->streetName,
            'dir_num_ext' => $faker->numberBetween(0,255),
            'dir_num_int' => $faker->numberBetween(0,255),
            'dir_cp' => $faker->buildingNumber,
            'dir_delegacion' => $faker->streetSuffix,
            'credito' => $faker->numberBetween(0,50000),
            'deuda' => $faker->numberBetween(0,50000),
        ];
    }


}
