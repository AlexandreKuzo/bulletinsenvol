<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LyceenController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'lyceens';

	public function create() {

		return view('lyceen');
	}

	public function store() {

		request()->validate([

				'dossier' => ['required'],
			]);

		$lyceens = new \App\Lyceen([

				'Trimestre'     => request('Trimestre'),
				'classe_niveau' => request('classe_niveau'),
				'français'     => request('français'),
				'histoiregeo'   => request('histoiregeo'),
				'LV1'           => request('LV1'),
				'LV2'           => request('LV2'),
				'EPS'           => request('EPS'),
				'sciences'      => request('sciences'),
				'email'         => auth()->user()->email,
				'name'          => auth()->user()->name,
				'dossier'       => request('dossier')->store('', 'public'),

			]);

		$lyceens->save();
		return redirect('/success');

	}
}