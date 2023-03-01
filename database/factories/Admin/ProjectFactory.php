<?php

namespace Database\Factories\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin\Industry;
use App\Models\Admin\Member;
use App\Models\Admin\Partner;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'service_id' => Service::all()->random()->id,
            'subservice_id' => Subservice::all()->random()->id,
            'industry_id' => Industry::all()->random()->id,
            'member_id' => Member::all()->random()->id,
            'partner_id' => Partner::all()->random()->id,
            'title' => fake()->sentence,
            'descr' => fake()->paragraph(70),
            'short_descr' => fake()->paragraph(5),
            'project_img' => $this->faker->imageUrl(1296, 495),
            'form_title' => fake()->sentence,
            'meta_title' => fake()->sentence,
            'meta_descr' => fake()->paragraph(30),
        ];
    }
}
