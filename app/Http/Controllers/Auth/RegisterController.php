<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::BERANDA;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
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
            'sk' => 'required',
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
            'sk.required' => 'Harap menyetujui Syarat dan Ketentuan kami',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nik' => $data['nik'],
            'no_kk' => $data['no_kk'],
            'nama_lengkap' => ucwords($data['nama_lengkap']),
            'tempat_lahir' => ucwords($data['tempat_lahir']),
            'tgl_lahir' => $data['tgl_lahir'],
            'nama_ibu' => ucwords($data['nama_ibu']),
            'telp' => $data['telp'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'username' => strtolower($data['username']),
            'email' => strtolower($data['email']),
            'password' => Hash::make($data['password']),
            'profil' => 'default.svg',
        ]);
    }
}
