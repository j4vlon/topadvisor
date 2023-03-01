<?php

namespace Database\Factories\Admin;

use App\Models\Admin\InfoDirection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'infodirection_id' => InfoDirection::all()->random()->id,
            'meta_title' => fake()->sentence,
            'title' => fake()->sentence,
            'file_url' => ['mimes:pdf,doc,docx','required'],
        ];
    }
}
