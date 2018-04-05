<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		$faker = Faker\Factory::create(); //import library faker

		$limit = 20; //batasan berapa banyak data

		for ($i = 0; $i < $limit; $i++) {
			DB::table('siswa')->insert([ //mengisi datadi database
				'nama' => $faker->name,
				'alamat' => $faker->address,
				'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
			]);
		}
	}
}
