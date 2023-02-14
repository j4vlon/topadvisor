<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubserviceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'descr' => 'required',
            'descr_title' => 'required',
            'default_txt' => 'required',
            'file_url' => ['mimes:png,jpg,jpeg,svg'],
            'form_title' => 'required'
        ];
    }
}
