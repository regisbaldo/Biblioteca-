<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Comment;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()->each(function ($user) {
        $user->comments()->save(factory(Comment::class)->make());
    });
    }
}
