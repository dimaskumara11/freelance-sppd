<?php

namespace App\Http\Requests\Pejabat;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PejabatPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'tahun' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'jabatan_sebenarnya' => 'required',
            'status_aktif' => 'required',
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
            'tahun.required' => 'Tahun Harus Di Isi',
            'nip.required' => 'NIP Harus Di Isi',
            'nama.required' => 'Nama Harus Di Isi',
            'pangkat.required' => 'Pangkat Harus Di Isi',
            'jabatan.required' => 'Jabatan Harus Di Isi',
            'jabatan_sebenarnya.required' => 'Jabatan Sebenarnya Harus Di Isi',
            'status_aktif.required' => 'Posisi Harus Di Isi',
            'tingkat.required' => 'Tingkat Harus Di Isi',
        ];
    }
}