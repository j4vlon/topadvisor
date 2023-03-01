<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Subservice>
 */
class SubserviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'meta_title' => fake()->sentence,
            'meta_descr' => ucfirst($this->faker->words(100, true)),
            'service_id' => Service::all()->random()->id,
            'title' => fake()->sentence,
            'descr' => fake()->paragraph(100),
            'descr_title' => fake()->sentence,
            'default_txt' => ucfirst($this->faker->words(50, true)),
            'file_url' => $this->faker->imageUrl(1296, 495),
            'is_active' => fake()->randomElement([true, false]),
            'form_title' => fake()->sentence
        ];
    }

}

