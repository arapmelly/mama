<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LevelsTableSeeder extends Seeder {

	public function run()
	{
		
		$level = new Level;
		$level->name = 'High School';
		$level->description = 'This is for individuals who have just left high school';
		$level->save();

		$level = new Level;
		$level->name = 'Certificate';
		$level->description = 'This is for individuals holding a certificate from tertiary and vocational institutions';
		$level->save();

		$level = new Level;
		$level->name = 'Diploma';
		$level->description = 'This is for diploma holders';
		$level->save();

		$level = new Level;
		$level->name = 'Degree';
		$level->description = 'This is for degree holders';
		$level->save();

		$level = new Level;
		$level->name = 'Masters';
		$level->description = 'This is for individual holding a masters degree';
		$level->save();

	}

}