<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller {

	public function create(Request $request){

		$validation = Validator::make($request->all(), [
			'nama' => 'required|string',
			'judul' => 'required|string',
			'kategori' => 'required|string',
			'isi_artikel' => 'required|string'
		]);

		if ($validation->fails()){
			$errors = $validation->errors();
			return[
				'status' => 'errors',
				'message' => $errors,
				'result' => null
			];
		}

		$result = \App\Artikel::create($request->all());
		if ($result){
			return [
			'status' => 'success',
			'message' => 'Data berhasil ditambahkan',
			'result' => $result

			];
		} else {
			return [
			'status' => 'error',
			'message' => 'Data gagal ditambahkan',
			'result' => null
			];
		}
	}

	public function read(Request $request){
		$result = \App\Artikel::all();
		return [
			'status' => 'success',
			'message' => '',
			'result' => $result
		];
	}

	public function update(Request $request, $id) {
		$validation = Validator::make($request->all(), [
				'nama' => 'required|string',
				'judul' => 'required|string',
				'kategori' => 'required|string',
				'isi_artikel' => 'required|string'
			]);

			if ($validation->fails()) {
				$errors = $validation->errors();
				return [
					'status' => 'error',
					'message' => '$errors',
					'result' => null
				];
			}

			$artikel = \App\Artikel::find($id);
			if (empty($artikel)) {
				return [
					'status' => 'error',
					'message' => 'Data tidak ditemukan',
					'result' => null
				];
			}

			$result = $artikel->update($request->all());
			if ($result) {
				return [
					'status' => 'success',
					'message' => 'Data berhasil diubah',
					'result' => $result
				];
			} else {
				return [
					'status' => 'error',
					'message' => 'Data gagal diubah',
					'result' => null
				];
			}
	}

	public function delete(Request $request, $id) {
		$artikel = \App\Artikel::find($id);
		if (empty($artikel)) {
			return [
				'status' => 'error',
				'message' => 'Data tidak ditemukan',
				'result' => null
			];
		}

		$result = $artikel->delete($id);
		if ($result) {
			return [
				'status' => 'success',
				'message' => 'Data berhasil dihapus',
				'result' => $result
			];
		} else {
			return [
				'status' => 'error',
				'message' => 'Data gagal dihapus',
				'result' => null
			];
		} 
	}

	public function getDetail($id) 
	{
		$artikel = \App\Artikel::find($id);
			if (empty($artikel)) {
				return [
					'status' => 'error',
					'message' => 'Data tidak ditemukan',
					'result' => null
				];
			}
			else{
				return [
					'status' => 'error',
					'message' => 'Data tidak ditemukan',
					'result' => $artikel
				];	
			}
	}
	
}
?>