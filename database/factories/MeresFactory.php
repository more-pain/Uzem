<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\meres>
 */
class MeresFactory extends Factory
{
    protected $model = meres::Class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'osszFogyasztas' => rand(1,100),
            'aktFogyasztas' => rand(1,100),
            'ido' => now(),
            'szenzor_ID' => rand(1,100), // password
        ];
    }
}
