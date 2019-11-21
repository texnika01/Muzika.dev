<?php

namespace App\Http\Requests\Frontend\Page;

use Illuminate\Foundation\Http\FormRequest;

class SongsRequests extends FormRequest
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
            'genres_list' => 'required',
            'song_name' => 'required|unique:songs|min:6|max:20|alpha_dash',
            'song_artist' => 'required|min:4',
            'song_path' => 'required|mimes:mpga,mpg,mp3',
            'image_path' => 'mimes:jpeg,bmp,png',
            'description' => 'required|min:3|max:100',
        ];
    }
}
