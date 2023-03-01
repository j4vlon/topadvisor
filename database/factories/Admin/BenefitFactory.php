<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Subservice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Benefit>
 */
class BenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subservice_id' => Subservice::all()->random()->id,
            'title' => fake()->title(),
            'descr' => fake()->paragraph,
            'file_url' => $this->faker->imageUrl(70, 70),
        ];
    }
}
