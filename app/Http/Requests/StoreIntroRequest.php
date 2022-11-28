<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIntroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
//        dd($this->all());
        return [
            'title' => ['array', 'required'],
            'title.*' => ['required', 'string', 'max:30'],

            'description' => ['array', 'required'],
            'description.*' => ['required', 'string', 'max:150'],
//            'description.*.ru' => ['required', 'string', 'max:150'],
//
//            'image' => ['required', 'mimes:jpg,bmp,png,gif', 'size:20000']
        ];
    }

    public function attributes()
    {
        return [
            'title.en' => 'English Title',
            'title.ru' => 'Russian Title',
            'description.en' => 'English Description',
            'description.ru' => 'Russian Description',
        ];
    }
}
