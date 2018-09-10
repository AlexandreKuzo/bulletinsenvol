<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScienceTechniqueController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'sciencestechniques';

	public function create() {
		return view('sciencestechnique');
	}
	public function store() {
		$sciencestechniques = new \App\Sciencetechnique([
				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'francais'      => request('francais'),
				'phychi'        => request('phychi'),
				'LV1'           => request('LV1'),
				'maths'         => request('maths'),
				'technologie'   => request('technologie'),
				'email'         => request('email'),

			]);

		$sciencestechniques->save();
		return view('dossier');
	}}
