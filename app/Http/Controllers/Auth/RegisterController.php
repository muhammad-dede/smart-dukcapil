<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|unique:pelapor,nik|numeric',
            'no_kk' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu' => 'required|string',
            'telp' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'username' => 'required|string|unique:pelapor,username|regex:/^\S*$/u',
            'email' => 'required|email|unique:pelapor,email',
            'password' => 'required|min:8|string|confirmed',
        ], [
            'nik.required' => 'Wajib diisi',
            'nik.unique' => 'Sudah terdaftar',
            'nik.numeric' => 'Wajib diisi dengan angka',
            'no_kk.required' => 'Wajib diisi',
            'no_kk.numeric' => 'Wajib diisi dengan angka',
            'nama_lengkap.required' => 'Wajib diisi',
            'tempat_lahir.required' => 'Wajib diisi',
            'tgl_lahir.required' => 'Wajib diisi',
            'tgl_lahir.date_format' => 'Format tanggal tidak valid',
            'nama_ibu.required' => 'Wajib diisi',
            'telp.required' => 'Wajib diisi',
            'kewarganegaraan.required' => 'Wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'username.regex' => 'Username tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password konfirmasi tidak sama',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 400, 'error' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Berhasil Mendaftar']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:pelapor,nik|numeric',
            'no_kk' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu' => 'required|string',
            'telp' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'username' => 'required|string|unique:pelapor,username|regex:/^\S*$/u',
            'email' => 'required|email|unique:pelapor,email',
            'password' => 'required|min:8|string|confirmed',
        ]);

        User::create([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nama_lengkap' => ucwords($request->nama_lengkap),
            'tempat_lahir' => ucwords($request->tempat_lahir),
            'tgl_lahir' => $request->tgl_lahir,
            'nama_ibu' => ucwords($request->nama_ibu),
            'telp' => $request->telp,
            'kewarganegaraan' => $request->kewarganegaraan,
            'username' => strtolower($request->username),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'profil' => 'default.svg',
        ]);

        return redirect(url('login'))->with('success', 'Berhasil mendaftar, silahkan login untuk mengakses Aplikasi Smart Dukcapil');
    }
}
