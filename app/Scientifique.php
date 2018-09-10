<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scientifique extends Model {
	protected $table   = 'scientifiques';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'classe_niveau', 'phychi', 'SVT', 'LV1', 'maths', 'email',
	];
}
