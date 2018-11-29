<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 200; ++$i) {
            DB::table('projects')->insert([
                'title' => $faker->name,
                'user_id' => rand(1, 20),
                'like_count' => rand(1, 100),
                'task_id' => rand(1, 100),
                'poster' => 'user-'.rand(1, 20).'.jpg',
                'created_at' => '2018-11-26 18:35:20',
                'updated_at' => '2018-11-26 18:35:20',
            ]);
        }
        // $faker = Faker\Factory::create();
        // Projects::truncate();
        // for ($i = 1; i <= 20; ++$i) {

        // if ($i == 10) {
        //     $projects = Projects::create(array(
        //         'title' => $faker->realText(rand(20, 40)),
        //         'user_id' => '2',
        //         'like_count' => '0',
        //     ));
        // } else {
        //     $projects = Projects::create(array(
        //     'title' => $faker->realText(rand(20, 40)),
        //     'user_id' => '1',
        //     'like_count' => '0',
        // ));
        // }
        // }

    //     factory(App\Project::class, 20)->create()->each(function ($project) {
    //         $project->posts()->save(factory(App\Post::class)->make());
    //     });
    //     $factory->define(App\User::class, function (Faker\Generator $faker) {
    //     DB::table('project')->insert([
    //         'title' => $faker->realText(rand(20, 40)),
    //          'user_id' => '2',
    //         'like_count' => '0',
    //         ]);
    // }
    }
}
