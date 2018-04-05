<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {
	// menghubungkan tabel siswa
	protected $table = 'siswa';

	// menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
	public $timestamps = false;
}
