<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Litteraire extends Model {
	protected $table   = 'litteraires';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Trimestre', 'classe_niveau', 'francais', 'histoiregeo', 'LV1', 'philo', 'spé', 'email',
	];
}
