<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            ProjecTableSeeder::class,
            TaskTableSeeder::class,
            UserTableSeeder::class,
        ]);
        // $this->call(UserTableSeeder::class);
        // $this->call(ProjecTableSeeder::class);
        // $this->call(TaskTableSeeder::class);
    }
}
