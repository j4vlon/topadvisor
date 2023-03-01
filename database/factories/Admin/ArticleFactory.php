<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Industry;
use App\Models\Admin\Member;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Article>
 */
class ArticleFactory extends Factory
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
            'title' => fake()->title,
            'service_id' => Service::all()->random()->id,
            'subservice_id' => Subservice::all()->random()->id,
            'member_id' => Member::all()->random()->id,
            'industry_id' => Industry::all()->random()->id,
            'descr' => fake()->paragraph,
            'file_url' => $this->faker->imageUrl(1296, 495),
        ];
    }
}
