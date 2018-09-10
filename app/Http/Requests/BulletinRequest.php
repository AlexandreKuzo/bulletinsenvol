<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulletinRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'francais'    => 'bail|required',
			'histoiregeo' => 'bail|required',
			'maths'       => 'bail|required',
			'phychi'      => 'bail|required',
			'LV1'         => 'bail|required',
			'EPS'         => 'bail|required',
			'SVT'         => 'bail|required',
			'SES'         => 'bail|required',
			'philo'       => 'bail|required',
		];
	}
}
