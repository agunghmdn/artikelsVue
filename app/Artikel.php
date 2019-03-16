<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {
	public $table = 'tb_artikel';

	protected $fillable = [
		'nama', 'judul', 'kategori', 'isi_artikel'
	];
}
?>