<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Admin\Article;
use App\Models\Admin\Benefit;
use App\Models\Admin\Industry;
use App\Models\Admin\Member;
use App\Models\Admin\Partner;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::factory(1)->create(
            [
                 'name' => 'User Admin',
                 'email' => 'topadvisoruz@gmail.com',
                 'password' => bcrypt('TOPadvisor2022'),
            ]
        );


        Partner::factory(10)->create();
        Industry::factory()->count(11)->create();
        Member::factory(1)->create();
        Service::factory(4)
            ->has(Subservice::factory(4)
                ->has(Benefit::factory(2))
                ->has(Project::factory(2)))->create();

        Member::factory(8)->has(Article::factory(8))->create();

        Admin\InfoDirection::factory()->count(3)->create();
        Admin\News::factory()->count(12)->create();
    }
}
