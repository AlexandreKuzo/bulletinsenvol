<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economique extends Model {
	protected $table   = 'economiques';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'classe_niveau', 'histoiregeo', 'maths', 'LV1', 'SES', 'email',
	];
}
