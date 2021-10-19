<?php

namespace App\Http\Controllers\Application\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function updateProfilValidation(Request $request)
    {
        if ($request->file('profil')) {
            $validator_profil = Validator::make($request->all(), [
                'profil' => 'required|mimes:png,jpg,jpeg|max:1024',
            ]);
            if ($validator_profil->fails()) {
                return response()->json(['status' => 400, 'message' => $validator_profil->errors()->toArray()]);
            }
        }

        $validator = Validator::make($request->all(), [
            'nik' => 'required|numeric|unique:pelapor,nik,' . auth()->id() . ',id|digits:16,16',
            'no_kk' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu' => 'required|string',
            'telp' => 'required|string',
            'kewarganegaraan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function updateUsernameValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|regex:/^\S*$/u|unique:pelapor,username,' . auth()->id() . ',id',
            'password_confirmation_username' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        if (Hash::check($request->password_confirmation_username, auth()->user()->password)) {
            return response()->json(['status' => 200, 'message' => 'Success']);
        }

        return response()->json(['status' => 401, 'message' => 'Password Konfirmasi Salah']);
    }

    public function updateEmailValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:pelapor,email,' . auth()->id() . ',id',
            'password_confirmation_email' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        if (Hash::check($request->password_confirmation_email, auth()->user()->password)) {
            return response()->json(['status' => 200, 'message' => 'Success']);
        }

        return response()->json(['status' => 401, 'message' => 'Password Konfirmasi Salah']);
    }

    public function updatePasswordValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        if (Hash::check($request->current_password, auth()->user()->password)) {
            return response()->json(['status' => 200, 'message' => 'Success']);
        }

        return response()->json(['status' => 401, 'message' => 'Password Salah']);
    }
}
