<?php

namespace App\Http\Requests\Pns;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PnsPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nip' => 'required',
            'nama' => 'required',
            'gol' => 'required',
            'jabatan' => 'required',
            'eselon' => 'required',
            'tingkat' => 'required',
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
            'nip.required' => 'NIP Harus Di Isi',
            'nama.required' => 'Nama Harus Di Isi',
            'gol.required' => 'Golongan Harus Di Isi',
            'jabatan.required' => 'Jabatan Harus Di Isi',
            'eselon.required' => 'Eselon Harus Di Isi',
            'tingkat.required' => 'Tingkat Harus Di Isi',
        ];
    }
}