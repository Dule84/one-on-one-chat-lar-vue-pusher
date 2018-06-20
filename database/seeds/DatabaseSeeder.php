<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([
        	'email' => 'varicakd@gmail.com',
        	'name' => 'Dule'
        ]);

        factory(User::class)->create([
        	'email' => 'dejan@gmail.com',
        	'name' => 'Dejan'
        ]);
    }
}
