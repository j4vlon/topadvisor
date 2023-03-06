<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'member_id' => 'nullable',
            'industry_id' => 'required',
            'subservice_id' => 'required',
            'service_id' => 'required',
            'title' => 'required',
            'short_descr' => 'required',
            'descr' => 'required',
            'read_time' => 'required',
            'file_url' => ['mimes:jpg,png,jpeg,svg'],
        ];
    }
}
