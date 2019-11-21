<?php

namespace App\Http\Requests\Frontend\Page;

use Illuminate\Foundation\Http\FormRequest;

class TextsRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'name' 			=> 'required|unique:texts|min:6|max:50',
			'description'	=> 'required|min:8|max:100|alpha_dash',
			'genres_id' 	=> 'required'
        ];
    }
}
