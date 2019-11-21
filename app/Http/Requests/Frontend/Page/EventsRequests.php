<?php

namespace App\Http\Requests\Frontend\Page;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequests extends FormRequest
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
            'title' => 'required|min:6|max:20|unique:events',
			'pic_event' => 'required|mimes:jpeg,bmp,png',
			'body' => 'required|min:10|max:255',
        ];
    }
}
