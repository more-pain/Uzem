<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\szenzor>
 */
class SzenzorFactory extends Factory
{
    protected $model = szenzor::Class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mertTulajdonsag' => $this->faker->name(),
            'mertekegyseg' => $this->faker->text(10),
            'berendezes_id' => rand(1,100),
        ];
    }
}
