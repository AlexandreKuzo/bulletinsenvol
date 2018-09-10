<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sciencetechnique extends Model {
	protected $table   = 'sciencestechniques';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'classe_niveau', 'francais', 'maths', 'phychi', 'LV1', 'technologie', 'email',
	];
}
