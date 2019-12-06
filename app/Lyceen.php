<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyceen extends Model {
	protected $table   = 'lyceens';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = [

		'Trimestre', 'classe_niveau', 'français', 'histoiregeo', 'LV1', 'LV2', 'EPS', 'sciences', 'email', 'dossier',
	];

}
