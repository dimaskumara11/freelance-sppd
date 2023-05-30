<?php

namespace App\Http\Requests\AlamatSkpd;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class AlamatSkpdPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama_skpd' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
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
            'nama_skpd.required' => 'Nama SKPD Harus Di Isi',
            'alamat.required' => 'Alamat Harus Di Isi',
            'kode_pos.required' => 'Kode Pos Harus Di Isi',
        ];
    }
}