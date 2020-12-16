<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'tujuan' => 'required',
            'perihal' => 'required',
            'tes' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tujuan.required' => 'Tujuan harus diisi',
            'perihal.required' => 'Perihal harus diisi',
            'tes.required' => 'Tes harus diisi'
        ];
    }
}
