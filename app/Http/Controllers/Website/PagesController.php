<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('website.index', [
            'total' => Pengajuan::count(),
            'diproses' => Pengajuan::where('terima', null)->count(),
            'diterima' => Pengajuan::where('terima', 'Y')->count(),
            'ditolak' => Pengajuan::where('terima', 'N')->count(),
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }
}
