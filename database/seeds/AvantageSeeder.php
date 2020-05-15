<?php

use Illuminate\Database\Seeder;
use App\Avantages;
class AvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avantages = factory(Avantages::class, 3) -> create();
    }
}
