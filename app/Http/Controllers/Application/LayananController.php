<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\DataKelahiran;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Validator;

class LayananController extends Controller
{
    public function index()
    {
        return view('app.layanan.index', [
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }

    public function create($url)
    {
        return view('app.layanan.create', [
            'layanan' => Layanan::where('url', $url)->first(),
        ]);
    }

    public function store_validation(Request $request, $url)
    {
        if ($url == 'kelahiran') {
            return $this->validation_kelahiran($request);
        }
    }

    public function store(Request $request, $url)
    {
        $layanan = Layanan::where('url', $url)->first();
        if ($layanan->url == 'kelahiran' && $layanan->id == 1) {
            $data_kelahiran = DataKelahiran::create([
                'id_pelapor' => auth()->id(),
                'nama_anak' => ucwords($request->nama_anak),
                'jenis_kelamin_anak' => strtoupper($request->jenis_kelamin_anak),
                'tmpt_dilahirkan_anak' => $request->tmpt_dilahirkan_anak,
                'tmpt_kelahiran_anak' => ucwords($request->tmpt_kelahiran_anak),
                'hari_lahir_anak' => $request->hari_lahir_anak,
                'tgl_lahir_anak' => $request->tgl_lahir_anak,
                'waktu_lahir_anak' => $request->waktu_lahir_anak,
                'jenis_kelahiran_anak' => $request->jenis_kelahiran_anak,
                'kelahiran_ke_anak' => $request->kelahiran_ke_anak,
                'penolong_kelahiran_anak' => $request->penolong_kelahiran_anak,
                'berat_bayi_anak' => $request->berat_bayi_anak,
                'panjang_bayi_anak' => $request->panjang_bayi_anak,
                'nama_ayah' => ucwords($request->nama_ayah),
                'nik_ayah' => $request->nik_ayah,
                'tempat_lahir_ayah' => ucwords($request->tempat_lahir_ayah),
                'tgl_lahir_ayah' => $request->tgl_lahir_ayah,
                'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
                'nama_ibu' => ucwords($request->nama_ibu),
                'nik_ibu' => $request->nik_ibu,
                'tempat_lahir_ibu' => ucwords($request->tempat_lahir_ibu),
                'tgl_lahir_ibu' => $request->tgl_lahir_ibu,
                'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
                'nama_saksi_1' => ucwords($request->nama_saksi_1),
                'nik_saksi_1' => $request->nik_saksi_1,
                'no_kk_saksi_1' => $request->no_kk_saksi_1,
                'kewarganegaraan_saksi_1' => $request->kewarganegaraan_saksi_1,
                'nama_saksi_2' => ucwords($request->nama_saksi_2),
                'nik_saksi_2' => $request->nik_saksi_2,
                'no_kk_saksi_2' => $request->no_kk_saksi_2,
                'kewarganegaraan_saksi_2' => $request->kewarganegaraan_saksi_2,
            ]);
            $data_kelahiran->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);

        }elseif ($layanan->url == 'kematian' && $layanan->id == 7) {
            # code...
        }


        return redirect(url('app/beranda'))->with('success', 'Berhasil mengajukan pelaporan pencatatan sipil');
    }

    protected function validation_kelahiran($request)
    {
        $validator_wni = Validator::make($request->all(), [
            'nama_anak' => 'required|string',
            'jenis_kelamin_anak' => 'required',
            'tmpt_dilahirkan_anak' => 'required',
            'tmpt_kelahiran_anak' => 'required|string',
            'hari_lahir_anak' => 'required',
            'tgl_lahir_anak' => 'required|date_format:Y-m-d|before:'. now()->toDateString(),
            'waktu_lahir_anak' => 'required|date_format:H:i',
            'jenis_kelahiran_anak' => 'required',
            'kelahiran_ke_anak' => 'required|numeric',
            'penolong_kelahiran_anak' => 'required',
            'berat_bayi_anak' => 'required|numeric',
            'panjang_bayi_anak' => 'required|numeric',
            'nama_ayah' => 'required|string',
            'nik_ayah' => 'required|numeric|digits:16,16',
            'tempat_lahir_ayah' => 'required|string',
            'tgl_lahir_ayah' => 'required|date_format:Y-m-d|before:'. now()->toDateString(),
            'kewarganegaraan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'nik_ibu' => 'required|numeric|digits:16,16',
            'tempat_lahir_ibu' => 'required|string',
            'tgl_lahir_ibu' => 'required|date_format:Y-m-d|before:'. now()->toDateString(),
            'kewarganegaraan_ibu' => 'required|string',
            'nama_saksi_1' => 'required|string',
            'nik_saksi_1' => 'required|numeric|digits:16,16',
            'no_kk_saksi_1' => 'required|numeric',
            'kewarganegaraan_saksi_1' => 'required|string',
            'nama_saksi_2' => 'required|string',
            'nik_saksi_2' => 'required|numeric|digits:16,16',
            'no_kk_saksi_2' => 'required|numeric',
            'kewarganegaraan_saksi_2' => 'required|string',
        ]);

        if (!$validator_wni->passes()) {
            return response()->json(['status' => 400, 'message' => $validator_wni->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }
}
