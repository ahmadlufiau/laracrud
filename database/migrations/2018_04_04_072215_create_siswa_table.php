<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('siswa', function (Blueprint $table) {
			$table->increments('id'); // create column auto increment
			$table->string('nama', 50); // create column nama
			$table->string('alamat', 100); // create column alamat
			$table->string('email', 50); // create column email
			$table->timestamps(); // create column created_at dan updated_at (default laravel)
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('siswa');
	}
}
