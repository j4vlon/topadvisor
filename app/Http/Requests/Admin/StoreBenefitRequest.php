<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBenefitRequest extends FormRequest
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
            'subservice_id' => 'required',
            'addmore.*.title' => 'required',
            'addmore.*.default_txt' => 'required',
            'addmore.*.descr' => 'required',
            'addmore.*.file_url' => ['mimes:png,jpg,jpeg,svg', 'required'],
        ];
    }
}
