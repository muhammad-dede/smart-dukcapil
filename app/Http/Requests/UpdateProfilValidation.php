<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilValidation extends FormRequest
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
        // $rules = [];

        // if (!empty($this->attributes->has('profil'))) {
        //     $rules['profil'] = 'required|max:1024|mimes:png,jpg';
        // }

        // $rules['nik'] = 'required|numeric|unique:pelapor,nik,' . auth()->id() . ',id|digits:16,16';
        // $rules['no_kk'] = 'required|numeric';
        // $rules['nama_lengkap'] = 'numeric|string';
        // $rules['tempat_lahir'] = 'numeric|string';
        // $rules['tgl_lahir'] = 'required|date_format:Y-m-d';
        // $rules['nama_ibu'] = 'required|string';
        // $rules['telp'] = 'required|string';
        // $rules['username'] = 'required|string|unique:pelapor,' . auth()->id() . ',id|username|regex:/^\S*$/u';
        // $rules['email'] = 'required|email|unique:pelapor,email,' . auth()->id() . ',id';

        // return $rules;

        return [
            'nik' => 'required|numeric|unique:pelapor,nik,' . auth()->id() . ',id|digits:16,16',
            'no_kk' => 'required|numeric',
            'nama_lengkap' => 'numeric|string',
            'tempat_lahir' => 'numeric|string',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu' => 'required|string',
            'telp' => 'required|string',
            'username' => 'required|string|unique:pelapor,' . auth()->id() . ',id|username|regex:/^\S*$/u',
            'email' => 'required|email|unique:pelapor,email,' . auth()->id() . ',id',
        ];
    }
}
