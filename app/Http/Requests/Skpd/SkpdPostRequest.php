<?php

namespace App\Http\Requests\Skpd;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class SkpdPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'kode' => 'required',
            'nama' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        foreach ($validator->errors()->messages()??[] as $key => $value) {
            $messageError = $validator->errors()->messages()[$key][0];
        }
        throw new HttpResponseException(redirect()->back()->withInput()->with("error",$messageError));
    }

    public function messages()
    {
        return [
            'kode.required' => 'Kode Harus Di Isi',
            'nama.required' => 'Nama Harus Di Isi',
        ];
    }
}