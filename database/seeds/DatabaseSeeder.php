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
         $this->call(PublishingHouseSeeder::class);
         $this->call(AuthorSeeder::class);
         $this->call(BookSeeder::class);
         $this->call(UserSeeder::class);


    }
}
