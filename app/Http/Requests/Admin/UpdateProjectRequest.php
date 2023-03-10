<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'partner_id' => 'required',
            'member_id' => 'required',
            'subservice_id' => 'required',
            'industry_id' => 'required',
            'title' => 'required',
            'descr' => 'required',
            'short_descr' => 'required',
            'project_img' => ['mimes:jpg,png,jpeg,svg'],
            'form_title' => 'required'
        ];
    }
}
