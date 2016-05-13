<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersCollectionSeeder::class);
    }
}


class UsersCollectionSeeder extends Seeder {

    public function run()
    {
        DB::collection('users')->delete();

        User::create([
        	'name' => 'John Doe',
        	'email' => 'john@foobar.com',
        	'password' => bcrypt('password')
      	]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@foobar.com',
            'password' => bcrypt('password')
        ]);
    }

}