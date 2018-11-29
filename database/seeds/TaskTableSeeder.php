<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 200; ++$i) {
            DB::table('tasks')->insert([
                'title' => $faker->name,
                'project_id' => rand(1, 200),
                'like_count' => rand(1, 100),
                'poster' => 'user-'.rand(1, 20).'.jpg',
                'created_at' => '2018-11-26 18:35:20',
                'updated_at' => '2018-11-26 18:35:20',
            ]);
        }
        // $faker = Faker\Factory::create();
        // Task::truncate();
        // for ($i = 1; i <= 20; ++$i) {
        //     $projects = Task::create(array(
        //             'title' => $faker->realText(rand(20, 40)),
        //             'project_id' => $i,
        //             'like_count' => '0',
        //         ));
        // }
    //     factory(App\Task::class, 20)->create()->each(function ($project) {
    //         $project->posts()->save(factory(App\Post::class)->make());
    //     });
    //     DB::table('projects')->insert([
    //         'title' => $faker->realText(rand(20, 40)),
    //          'project_id' => '2',
    //         'like_count' => '0',
    //         ]);
    // }
    }
}
