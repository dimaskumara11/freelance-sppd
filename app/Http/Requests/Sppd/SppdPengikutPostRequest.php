<?php

namespace App\Http\Requests\Sppd;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class SppdPengikutPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'pns' => ['required',Rule::unique('sppd_pengikut','pns_id')->where(function ($query){
                return $query->where('pns_id', request()->pns)->where("sppd_id",request()->sppd)->whereNull('deleted_at');
            })]
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
        ];
    }
}