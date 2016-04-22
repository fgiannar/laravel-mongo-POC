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
        $this->call(UsersTableSeeder::class);
    }
}


class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'name' => 'user',
        	'email' => 'user@foobar.com',
        	'password' => bcrypt('password')
      	]);

        User::create([
            'name' => 'mastorr',
            'email' => 'mastorr@foobar.com',
            'password' => bcrypt('password')
        ]);
    }

}