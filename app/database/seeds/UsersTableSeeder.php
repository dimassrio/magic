<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create(array('username'=>'admin', 'password'=>Hash::make('admin'), 'name'=>'admin', 'level'=>0, 'email'=>'admin@magic.com', 'phone'=>'022122122'));
	}

}