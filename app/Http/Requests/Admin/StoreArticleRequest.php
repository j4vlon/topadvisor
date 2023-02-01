<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'member_id' => 'required',
            'descr_title' => 'required',
            'descr' => 'required',
            'descr2' => 'required',
            'file_url' => ['mimes:jpg,png,jpeg,svg','required'],
            'descr_img' => ['mimes:jpg,png,jpeg,svg','required'],
        ];
    }
}
