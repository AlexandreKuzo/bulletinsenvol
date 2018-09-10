<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sciencegestion extends Model {
	protected $table   = 'sciencesgestions';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'classe_niveau', 'francais', 'maths', 'ecodroit', 'LV1', 'management', 'email',
	];
}
