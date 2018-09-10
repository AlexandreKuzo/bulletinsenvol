<?php

namespace App\Http\Controllers;

use App\Http\Requests\DossierRequest;

class DossierController extends Controller {

	public function create() {
		return view('dossier');
	}

	public function store(DossierRequest $request) {

		request()->validate([

				'dossier' => ['required', 'max:4096'],

			]);

		$dossier = request('dossier')->store('public');

		return view('success');

	}
}
