<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory('App\User')->create(
            [
                'name' => 'milicofelix',
                'email' => 'milicofelix@gmail.com',
                'password' => bcrypt('morango'),
                'remember_token' => str_random(10),
            ]);

         $this->call('PostsTableSeeder');
         $this->call('TagTableSeeder');

        Model::reguard();
    }
}
