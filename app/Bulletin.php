<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model {
	protected $table   = 'bulletins';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'francais', 'histoiregeo', 'maths', 'phychi', 'LV1', 'SVT', 'brevet', 'email',
	];
}
