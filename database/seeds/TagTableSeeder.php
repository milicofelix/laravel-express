<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tag::truncate();

        //factory(Tag::class, 10)->create();
        factory('App\Tag', 10)->create();
    }
}
