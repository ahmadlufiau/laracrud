<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		// Tampil data
		$data = Siswa::all();
		return view('siswa.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		// Form Create
		return view('siswa.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		// Simpan Data
		$data = new Siswa();
		$data->nama = $request->nama;
		$data->alamat = $request->alamat;
		$data->email = $request->email;
		$data->save();
		return redirect()->route('siswa.index')->with('alert-success', 'Berhasil Menambahkan Data!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		// Detail Siswa
		$data = Siswa::find($id);
		return view('siswa.lihat', ['data' => $data]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		// Form Edit Siswa
		$data = Siswa::where('id', $id)->get();
		return view('siswa.edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		// Simpan Edit Siswa
		$data = Siswa::where('id', $id)->first();
		$data->nama = $request->nama;
		$data->alamat = $request->alamat;
		$data->email = $request->email;
		$data->save();
		return redirect()->route('siswa.index')->with('alert-success', 'Data berhasil diubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		// delete
		$data = Siswa::where('id', $id)->first();
		$data->delete();
		return redirect()->route('siswa.index')->with('alert-success', 'Data berhasi dihapus!');
	}
}
