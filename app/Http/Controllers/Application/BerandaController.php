<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('app.beranda.index', [
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }
}
