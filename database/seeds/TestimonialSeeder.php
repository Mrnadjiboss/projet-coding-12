<?php

use Illuminate\Database\Seeder;
use App\Testimonials;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = factory(Testimonials::class, 3) -> create();
    }
}
