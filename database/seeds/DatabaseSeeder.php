<?php

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
        // $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(AvantageSeeder::class);

    }
}
