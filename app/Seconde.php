<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seconde extends Model {
	protected $table   = 'secondes';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'francais', 'histoiregeo', 'maths', 'phychi', 'LV1', 'SVT', 'email',
	];
}
