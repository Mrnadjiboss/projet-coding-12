<?php

use Illuminate\Database\Seeder;
use App\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $header = factory(Header::class, 3) -> create();
    }
}
