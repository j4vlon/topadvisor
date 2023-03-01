<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        
        return [
            'title' => fake()->sentence,
            'form_title' => fake()->sentence
        ];
    }

//    public function configure()
//    {
//        return $this->afterCreating(function (Service $service) {
//            $service->subservices()->createMany(Subservice::factory()->count(16)->make()->toArray());
//        });
//    }
}
