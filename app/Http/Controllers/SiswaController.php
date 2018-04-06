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
		//
		return view('siswa.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$data = Siswa::where('id', $id)->first();
		$data->delete();
		return redirect()->route('siswa.index')->with('alert-success', 'Data berhasi dihapus!');
	}
}
