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
            'diproses' => Pengajuan::where('status', 'V')->orWhere('status',)->count(),
            'diterima' => Pengajuan::where('status', 'Y')->count(),
            'ditolak' => Pengajuan::where('status', 'N')->count(),
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }
}
