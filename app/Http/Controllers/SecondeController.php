<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondeController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'secondes';

	public function create() {
		return view('seconde');
	}
	public function store() {
		$secondes = new \App\Seconde([
				'Trimestre'   => request('Trimestre'),
				'francais'    => request('francais'),
				'histoiregeo' => request('histoiregeo'),
				'maths'       => request('maths'),
				'phychi'      => request('phychi'),
				'LV1'         => request('LV1'),
				'SVT'         => request('SVT'),
				'email'       => request('email'),

			]);

		$secondes->save();
		return view('dossier');
	}
}
