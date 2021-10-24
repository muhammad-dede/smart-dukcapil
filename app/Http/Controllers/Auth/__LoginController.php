<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:8|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        $user = User::where('username', $request->username)->orWhere('email', $request->username)->first();
        if (!$user) {
            return response()->json(['status' => 404, 'message' => 'Email atau Username tidak terdaftar.']);
        } else {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user, true);
                return response()->json(['status' => 200, 'message' => 'Berhasil Login']);
            } else {
                return response()->json(['status' => 401, 'message' => 'Password Salah']);
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(url('/'));
    }
}
