<?php
// ５－３５
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PeopleTableSeeder::class); //●
    }
}
