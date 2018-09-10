<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomiqueController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'economiques';

	public function create() {
		return view('economique');
	}
	public function store() {
		$economiques = new \App\Economique([
				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'histoiregeo'   => request('histoiregeo'),
				'maths'         => request('maths'),
				'LV1'           => request('LV1'),
				'SES'           => request('SES'),
				'email'         => request('email'),

			]);

		$economiques->save();
		return view('dossier');
	}
}
