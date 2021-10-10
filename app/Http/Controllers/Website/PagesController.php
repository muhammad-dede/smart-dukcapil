<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('website.index', [
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }
}
