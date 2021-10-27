<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('app.beranda.index', [
            'data_layanan' => Layanan::where('aktif', true)->get(),
            'data_pengajuan' => Pengajuan::where('id_pelapor', auth()->id())->orderBy('tgl', 'desc')->get(),
            'data_riwayat' => Pengajuan::where('id_pelapor', auth()->id())->where('status', 'Y')->orderBy('tgl', 'desc')->get(),
        ]);
    }
}
