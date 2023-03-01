<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Article;
use App\Models\Admin\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'descr' => fake()->paragraph(30),
            'work_post' => fake()->jobTitle,
            'file_url' => $this->faker->imageUrl(230, 230)
        ];
    }
//    public function configure()
//    {
//        return $this->afterCreating(function (Member $member) {
//            $member->articles()->createMany(Article::factory()->count(15)->make()->toArray());
//        });
//    }
}
