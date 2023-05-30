<?php

namespace App\Http\Requests\Sppd;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class SppdPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'tahun' => 'required',
            'pns' => 'required',
            'skpd' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'tanggal_sppd' => 'required',
            'kendaraan' => 'required',
            'dari_anggaran' => 'required',
            'tujuan' => 'required',
            'pengelola' => 'required',
            'perdin' => 'required',
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
            'pns.required' => 'Nama Harus Di Isi',
            'skpd.required' => 'Tujuan Perjalanan Dinas Harus Di Isi',
            'tanggal_berangkat.required' => 'Tanggal Berangkat Harus Di Isi',
            'tanggal_kembali.required' => 'Tanggal Kembali Harus Di Isi',
            'tanggal_sppd.required' => 'Tanggal SPPD Harus Di Isi',
            'kendaraan.required' => 'Kendaraan Harus Di Isi',
            'dari_anggaran.required' => 'Dari Anggaran Harus Di Isi',
            'tujuan.required' => 'Maksud Tujuan Harus Di Isi',
            'pengelola.required' => 'Pengelola Harus Di Isi',
        ];
    }
}