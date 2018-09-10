<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SciencegestionController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'sciencesgestions';

	public function create() {
		return view('sciencegestion');
	}
	public function store() {
		$sciencesgestions = new \App\Sciencegestion([
				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'francais'      => request('francais'),
				'ecodroit'      => request('ecodroit'),
				'LV1'           => request('LV1'),
				'maths'         => request('maths'),
				'management'    => request('management'),
				'email'         => request('email'),

			]);

		$sciencesgestions->save();
		return view('dossier');
	}
}
