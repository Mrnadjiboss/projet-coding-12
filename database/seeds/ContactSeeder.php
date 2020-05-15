<?php

use Illuminate\Database\Seeder;
use App\Contacts;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = factory(Contacts::class, 1) -> create();
    }
}
