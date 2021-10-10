<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        //
    }

    public function show($url)
    {
        return view('app.layanan', [
            'layanan' => Layanan::where('url', $url)->first(),
        ]);
    }
}
