<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function bulletins() {
		return $this->hasMany(Bulletin::class , 'email', 'email');
		return $this->hasMany(Bulletin::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Bulletin::class , 'created_at', 'created_at');

	}

	public function secondes() {
		return $this->hasMany(Seconde::class , 'email', 'email');
		return $this->hasMany(Seconde::class , 'created_at', 'created_at');

	}

	public function scientifiques() {
		return $this->hasMany(Scientifique::class , 'email', 'email');
		return $this->hasMany(Scientifique::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Scientifique::class , 'created_at', 'created_at');

	}

	public function economiques() {
		return $this->hasMany(Economique::class , 'email', 'email');
		return $this->hasMany(Economique::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Ecnonomique::class , 'created_at', 'created_at');

	}

	public function litteraires() {
		return $this->hasMany(Litteraire::class , 'email', 'email');
		return $this->hasMany(Litteraire::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Litteraire::class , 'created_at', 'created_at');

	}

	public function sciencestechniques() {
		return $this->hasMany(Sciencetechnique::class , 'email', 'email');
		return $this->hasMany(Sciencetechnique::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Sciencetechnique::class , 'created_at', 'created_at');

	}

	public function sciencesgestions() {
		return $this->hasMany(Sciencegestion::class , 'email', 'email');
		return $this->hasMany(Sciencegestion::class , 'Trimestre', 'Trimestre');
		return $this->hasMany(Sciencegestion::class , 'created_at', 'created_at');

	}

}
