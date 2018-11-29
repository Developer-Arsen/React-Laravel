<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 20; ++$i) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'arsenmkhitaryan.2002@gmail.com'.$i,
                'password' => '$2y$10$ld1ua9O0L4YzqTRt8GP9dOCr1g3/6uTjBnTwgDgoFM1GtWt7Z3ou.',
                'created_at' => '2018-11-26 18:35:20',
                'updated_at' => '2018-11-26 18:35:20',
                'poster' => 'user-'.$i.'.jpg',
                'project_id' => rand(1, 200),
                'project_count' => rand(1, 20),
                'like_count' => rand(1, 100),
            ]);
        }
    }
}
