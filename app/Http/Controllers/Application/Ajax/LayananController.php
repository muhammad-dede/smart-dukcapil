<?php

namespace App\Http\Controllers\Application\Ajax;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    public function storeValidation(Request $request, $url)
    {
        if ($url == 'kelahiran') {
            return $this->validationKelahiran($request);
        } elseif ($url == 'lahir-mati') {
            return $this->validationLahirMati($request);
        } elseif ($url == 'perkawinan') {
            return $this->validationPerkawinan($request);
        } elseif ($url == 'pembatalan-perkawinan') {
            return $this->validationPembatalanPerkawinan($request);
        } elseif ($url == 'perceraian') {
            return $this->validationPerceraian($request);
        } elseif ($url == 'pembatalan-perceraian') {
            return $this->validationPembatalanPerceraian($request);
        } else {
            return response()->json(['status' => 404, 'message' => 'Tidak Ditemukan']);
        }
    }

    protected function validationKelahiran($request)
    {
        $validator = Validator::make($request->all(), [
            'nama_anak' => 'required|string',
            'jenis_kelamin_anak' => 'required',
            'tmpt_dilahirkan_anak' => 'required',
            'tmpt_kelahiran_anak' => 'required|string',
            'hari_lahir_anak' => 'required',
            'tgl_lahir_anak' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
            'waktu_lahir_anak' => 'required|date_format:H:i',
            'jenis_kelahiran_anak' => 'required',
            'kelahiran_ke_anak' => 'required|numeric',
            'penolong_kelahiran_anak' => 'required',
            'berat_bayi_anak' => 'required|numeric',
            'panjang_bayi_anak' => 'required|numeric',
            'nama_ayah' => 'required|string',
            'nik_ayah' => 'required|numeric|digits:16,16',
            'tempat_lahir_ayah' => 'required|string',
            'tgl_lahir_ayah' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
            'kewarganegaraan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'nik_ibu' => 'required|numeric|digits:16,16',
            'tempat_lahir_ibu' => 'required|string',
            'tgl_lahir_ibu' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
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

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationLahirMati($request)
    {
        $validator = Validator::make($request->all(), [
            'lamanya_dalam_kandungan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tgl_lahir_mati' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
            'jenis_kelahiran' => 'required|string',
            'anak_ke' => 'required|numeric|max:3',
            'tempat_dilahirkan' => 'required|string',
            'penolong_kelahiran' => 'required|string',
            'sebab_lahir_mati' => 'required|string',
            'yang_menentukan' => 'required|string',
            'tempat_kelahiran' => 'required|string',
            'nama_ayah' => 'required|string',
            'nik_ayah' => 'required|numeric|digits:16,16',
            'tempat_lahir_ayah' => 'required|string',
            'tgl_lahir_ayah' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
            'kewarganegaraan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'nik_ibu' => 'required|numeric|digits:16,16',
            'tempat_lahir_ibu' => 'required|string',
            'tgl_lahir_ibu' => 'required|date_format:Y-m-d|before:' . Carbon::tomorrow()->toDateString(),
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

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPerkawinan($request)
    {
        $validator = Validator::make($request->all(), [
            'nik_ayah_dari_suami' => 'required|numeric|digits:16,16',
            'nama_ayah_dari_suami' => 'required|string',
            'nik_ibu_dari_suami' => 'required|numeric|digits:16,16',
            'nama_ibu_dari_suami' => 'required|string',
            'nik_ayah_dari_istri' => 'required|numeric|digits:16,16',
            'nama_ayah_dari_istri' => 'required|string',
            'nik_ibu_dari_istri' => 'required|numeric|digits:16,16',
            'nama_ibu_dari_istri' => 'required|string',
            'status_perkawinan_sebelum_kawin' => 'required|string',
            'perkawinan_yang_ke' => 'required|numeric|max:3',
            'istri_yang_ke' => 'required|numeric|max:3',
            'tgl_pemberkatan_perkawinan' => 'required|date_format:Y-m-d',
            'tgl_melapor' => 'required|date_format:Y-m-d',
            'jam_pelaporan' => 'required|date_format:H:i',
            'agama_kepercayaan' => 'required|string',
            'nama_organisasi_kepercayaan' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'no_penetapan_pengadilan' => 'required|string',
            'tgl_penepatan_pengadilan' => 'required|date_format:Y-m-d',
            'nama_pemuka_agama' => 'required|string',
            'no_surat_izin_dari_perwakilan' => 'required|string',
            'no_passport' => 'required|string',
            'perjanjian_perkawinan' => 'required|string',
            'no_akta_notaris' => 'required|string',
            'tgl_akta_notaris' => 'required|string',
            'jumlah_anak' => 'required|numeric|max:3',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPembatalanPerkawinan($request)
    {
        $validator = Validator::make($request->all(), [
            'tgl_perkawinan' => 'required|date_format:Y-m-d',
            'no_akta_perkawinan' => 'required|string',
            'tgl_akta_perkawinan' => 'required|date_format:Y-m-d',
            'nama_pengadilan_pembatalan' => 'required|string',
            'no_putusan_pengadilan' => 'required|string',
            'tgl_putusan_pengadilan' => 'required|date_format:Y-m-d',
            'tgl_pelaporan_perkawinan_luar_negeri' => 'required|date_format:Y-m-d',
            'nik_ayah_dari_suami' => 'required|numeric|digits:16,16',
            'nama_ayah_dari_suami' => 'required|string',
            'nik_ibu_dari_suami' => 'required|numeric|digits:16,16',
            'nama_ibu_dari_suami' => 'required|string',
            'nik_ayah_dari_istri' => 'required|numeric|digits:16,16',
            'nama_ayah_dari_istri' => 'required|string',
            'nik_ibu_dari_istri' => 'required|numeric|digits:16,16',
            'nama_ibu_dari_istri' => 'required|string',
            'status_perkawinan_sebelum_kawin' => 'required|string',
            'perkawinan_yang_ke' => 'required|numeric|max:3',
            'istri_yang_ke' => 'required|numeric|max:3',
            'tgl_pemberkatan_perkawinan' => 'required|date_format:Y-m-d',
            'tgl_melapor' => 'required|date_format:Y-m-d',
            'jam_pelaporan' => 'required|date_format:H:i',
            'agama_kepercayaan' => 'required|string',
            'nama_organisasi_kepercayaan' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'no_penetapan_pengadilan' => 'required|string',
            'tgl_penepatan_pengadilan' => 'required|date_format:Y-m-d',
            'nama_pemuka_agama' => 'required|string',
            'no_surat_izin_dari_perwakilan' => 'required|string',
            'no_passport' => 'required|string',
            'perjanjian_perkawinan' => 'required|string',
            'no_akta_notaris' => 'required|string',
            'tgl_akta_notaris' => 'required|string',
            'jumlah_anak' => 'required|numeric|max:3',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPerceraian($request)
    {
        $validator = Validator::make($request->all(), [
            'no_akta_perkawinan' => 'required|string',
            'tgl_akta_perkawinan' => 'required|date_format:Y-m-d',
            'tempat_pencatatan_perkawinan' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'tgl_putusan_pengadilan' => 'required|date_format:Y-m-d',
            'no_putusan_pengadilan' => 'required|string',
            'no_surat_panitera_pengadilan' => 'required|string',
            'tgl_surat_panitera_pengadilan' => 'required|date_format:Y-m-d',
            'tgl_melapor' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPembatalanPerceraian($request)
    {
        $validator = Validator::make($request->all(), [
            'no_akta_perceraian' => 'required|string',
            'tgl_akta_perceraian' => 'required|date_format:Y-m-d',
            'tgl_pelaporan_perceraian_luar_negeri' => 'required|date_format:Y-m-d',
            'no_akta_perkawinan' => 'required|string',
            'tgl_akta_perkawinan' => 'required|date_format:Y-m-d',
            'tempat_pencatatan_perkawinan' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'tgl_putusan_pengadilan' => 'required|date_format:Y-m-d',
            'no_putusan_pengadilan' => 'required|string',
            'no_surat_panitera_pengadilan' => 'required|string',
            'tgl_surat_panitera_pengadilan' => 'required|date_format:Y-m-d',
            'tgl_melapor' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }
}
