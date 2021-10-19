<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        return view('app.profil.index');
    }

    public function updateProfil(Request $request)
    {
        if ($request->file('profil')) {
            $request->validate([
                'profil' => 'required|mimes:png,jpg,jpeg|max:1024',
            ]);

            if (auth()->user()->profil !== 'default.svg') {
                File::delete('images/profil/' . auth()->user()->profil);
            }

            $profil = 'profil-' . auth()->user()->username . '.' . $request->profil->extension();
            $request->profil->move(public_path('images/profil'), $profil);
        } else {
            $profil = auth()->user()->profil;
        }

        $request->validate([
            'nik' => 'required|numeric|unique:pelapor,nik,' . auth()->id() . ',id|digits:16,16',
            'no_kk' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu' => 'required|string',
            'telp' => 'required|string',
            'kewarganegaraan' => 'required|string',
        ]);

        User::where('id', auth()->id())->update([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nama_lengkap' => ucwords($request->nama_lengkap),
            'tempat_lahir' => ucwords($request->tempat_lahir),
            'tgl_lahir' => $request->tgl_lahir,
            'nama_ibu' => ucwords($request->nama_ibu),
            'telp' => $request->telp,
            'kewarganegaraan' => $request->kewarganegaraan,
            'profil' => $profil,
        ]);

        return redirect(url('app/profil'))->with('success', 'Berhasil mengupdate profil');
    }

    public function updateUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|string|regex:/^\S*$/u|unique:pelapor,username,' . auth()->id() . ',id',
            'password_confirmation_username' => 'required|string',
        ]);

        User::where('id', auth()->id())->update([
            'username' => strtolower($request->username),
        ]);

        return redirect(url('app/profil'))->with('success', 'Berhasil mengubah email');
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:pelapor,email,' . auth()->id() . ',id',
            'password_confirmation_email' => 'required|string',
        ]);

        User::where('id', auth()->id())->update([
            'email' => strtolower($request->email),
        ]);

        return redirect(url('app/profil'))->with('success', 'Berhasil mengubah email');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|confirmed|min:8',
        ]);

        User::where('id', auth()->id())->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect(url('app/profil'))->with('success', 'Berhasil mengubah password');
    }
}
