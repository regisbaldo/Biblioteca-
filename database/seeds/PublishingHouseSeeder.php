<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\PublishingHouse;

class PublishingHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('publishing_houses')->insert([
        //   'name' => Str::random(10)
        //]);
        factory(PublishingHouse::class, 50)->create();
    }
}
