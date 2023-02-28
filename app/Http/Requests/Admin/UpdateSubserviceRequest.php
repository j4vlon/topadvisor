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
            'meta_title' => 'required',
            'meta_descr' => 'required',
            'service_id' => 'required',
            'title' => 'required',
            'descr' => 'required',
            'descr_title' => 'required',
            'default_txt' => 'required',
            'file_url' => ['mimes:png,jpg,jpeg,svg'],
            'is_active' => 'nullable',
            'form_title' => 'required'
        ];
    }
}
