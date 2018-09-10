<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LitteraireController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'litteraires';

	public function create() {
		return view('litteraire');
	}
	public function store() {
		$litteraires = new \App\Litteraire([
				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'histoiregeo'   => request('histoiregeo'),
				'francais'      => request('francais'),
				'LV1'           => request('LV1'),
				'philo'         => request('philo'),
				'spé'          => request('spé'),
				'email'         => request('email'),

			]);

		$litteraires->save();
		return view('dossier');
	}
}
