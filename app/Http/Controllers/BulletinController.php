<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulletinController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'bulletins';

	public function create() {
		return view('bulletin');
	}
	public function store() {
		$bulletins = new \App\Bulletin([

				'francais'    => request('francais'),
				'histoiregeo' => request('histoiregeo'),
				'maths'       => request('maths'),
				'phychi'      => request('phychi'),
				'LV1'         => request('LV1'),
				'SVT'         => request('SVT'),
				'brevet'      => request('brevet'),
				'email'       => request('email'),

			]);

		$bulletins->save();
		return view('dossier');
	}
}
