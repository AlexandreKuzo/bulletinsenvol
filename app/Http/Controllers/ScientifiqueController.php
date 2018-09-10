<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScientifiqueController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'scientifiques';

	public function create() {
		return view('scientifique');
	}
	public function store() {
		$scientifiques = new \App\Scientifique([
				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'SVT'           => request('SVT'),
				'phychi'        => request('phychi'),
				'LV1'           => request('LV1'),
				'maths'         => request('maths'),
				'email'         => request('email'),

			]);

		$scientifiques->save();
		return view('dossier');
	}
}
