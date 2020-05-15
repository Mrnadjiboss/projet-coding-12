<?php

use Illuminate\Database\Seeder;
use App\Works;
class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = factory(Works::class, 3) -> create();
    }
}
