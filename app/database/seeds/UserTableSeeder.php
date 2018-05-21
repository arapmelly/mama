<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		
		$user = new User;
		$user->email = 'admin@cvmama.co.ke';
		$user->password = Hash::make('admin123');
		$user->password_confirmation = Hash::make('admin123');
		$user->user_type="admin";
		$user->confirmed = true;
		$user->confirmation_code = md5(uniqid(mt_rand(), true));
		$user->save();
	}

}