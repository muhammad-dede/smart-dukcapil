<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\DataKelahiran;
use App\Models\DataLahirMati;
use App\Models\DataPembatalanPerceraian;
use App\Models\DataPembatalanPerkawinan;
use App\Models\DataPerceraian;
use App\Models\DataPerkawinan;
use App\Models\Layanan;
use App\Models\Pengajuan;
use App\Models\PengajuanBerkas;
use App\Models\Persyaratan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    public function index()
    {
        return view('app.layanan.index', [
            'data_layanan' => Layanan::where('aktif', true)->get(),
        ]);
    }

    public function show($id)
    {
        return view('app.layanan.show', [
            'pengajuan' => Pengajuan::where('id', $id)->where('id_pelapor', auth()->id())->first(),
            'status_pengajuan' => get_status_pengajuan($id),
        ]);
    }

    public function create($url)
    {
        return view('app.layanan.create', [
            'layanan' => Layanan::where('url', $url)->first(),
        ]);
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
        } elseif ($layanan->url == 'lahir-mati' && $layanan->id == 2) {
            $data_lahir_mati = DataLahirMati::create([
                'id_pelapor' => auth()->id(),
                'lamanya_dalam_kandungan' => $request->lamanya_dalam_kandungan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir_mati' => $request->tgl_lahir_mati,
                'jenis_kelahiran' => $request->jenis_kelahiran,
                'anak_ke' => $request->anak_ke,
                'tempat_dilahirkan' => $request->tempat_dilahirkan,
                'penolong_kelahiran' => $request->penolong_kelahiran,
                'sebab_lahir_mati' => $request->sebab_lahir_mati,
                'yang_menentukan' => $request->yang_menentukan,
                'tempat_kelahiran' => ucwords($request->tempat_kelahiran),
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
            $data_lahir_mati->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'perkawinan' && $layanan->id == 3) {
            $data_perkawinan = DataPerkawinan::create([
                'id_pelapor' => auth()->id(),
                'nik_ayah_dari_suami' => $request->nik_ayah_dari_suami,
                'nama_ayah_dari_suami' => ucwords($request->nama_ayah_dari_suami),
                'nik_ibu_dari_suami' => $request->nik_ibu_dari_suami,
                'nama_ibu_dari_suami' => ucwords($request->nama_ibu_dari_suami),
                'nik_ayah_dari_istri' => $request->nik_ayah_dari_istri,
                'nama_ayah_dari_istri' => ucwords($request->nama_ayah_dari_istri),
                'nik_ibu_dari_istri' => $request->nik_ibu_dari_istri,
                'nama_ibu_dari_istri' => ucwords($request->nama_ibu_dari_istri),
                'status_perkawinan_sebelum_kawin' => $request->status_perkawinan_sebelum_kawin,
                'perkawinan_yang_ke' => $request->perkawinan_yang_ke,
                'istri_yang_ke' => $request->istri_yang_ke,
                'tgl_pemberkatan_perkawinan' => $request->tgl_pemberkatan_perkawinan,
                'tgl_melapor' => $request->tgl_melapor,
                'jam_pelaporan' => $request->jam_pelaporan,
                'agama_kepercayaan' => $request->agama_kepercayaan,
                'nama_organisasi_kepercayaan' => $request->nama_organisasi_kepercayaan,
                'nama_pengadilan' => $request->nama_pengadilan,
                'no_penetapan_pengadilan' => $request->no_penetapan_pengadilan,
                'tgl_penepatan_pengadilan' => $request->tgl_penepatan_pengadilan,
                'nama_pemuka_agama' => ucwords($request->nama_pemuka_agama),
                'no_surat_izin_dari_perwakilan' => $request->no_surat_izin_dari_perwakilan,
                'no_passport' => $request->no_passport,
                'perjanjian_perkawinan' => $request->perjanjian_perkawinan,
                'no_akta_notaris' => $request->no_akta_notaris,
                'tgl_akta_notaris' => $request->tgl_akta_notaris,
                'jumlah_anak' => $request->jumlah_anak,
            ]);
            $data_perkawinan->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pembatalan-perkawinan' && $layanan->id == 4) {
            $data_pembatalan_perkawinan = DataPembatalanPerkawinan::create([
                'id_pelapor' => auth()->id(),
                'tgl_perkawinan' => $request->tgl_perkawinan,
                'no_akta_perkawinan' => $request->no_akta_perkawinan,
                'tgl_akta_perkawinan' => $request->tgl_akta_perkawinan,
                'nama_pengadilan_pembatalan' => strtoupper($request->nama_pengadilan_pembatalan),
                'no_putusan_pengadilan' => $request->no_putusan_pengadilan,
                'tgl_putusan_pengadilan' => $request->tgl_putusan_pengadilan,
                'tgl_pelaporan_perkawinan_luar_negeri' => $request->tgl_pelaporan_perkawinan_luar_negeri,
                'nik_ayah_dari_suami' => $request->nik_ayah_dari_suami,
                'nama_ayah_dari_suami' => ucwords($request->nama_ayah_dari_suami),
                'nik_ibu_dari_suami' => $request->nik_ibu_dari_suami,
                'nama_ibu_dari_suami' => ucwords($request->nama_ibu_dari_suami),
                'nik_ayah_dari_istri' => $request->nik_ayah_dari_istri,
                'nama_ayah_dari_istri' => ucwords($request->nama_ayah_dari_istri),
                'nik_ibu_dari_istri' => $request->nik_ibu_dari_istri,
                'nama_ibu_dari_istri' => ucwords($request->nama_ibu_dari_istri),
                'status_perkawinan_sebelum_kawin' => $request->status_perkawinan_sebelum_kawin,
                'perkawinan_yang_ke' => $request->perkawinan_yang_ke,
                'istri_yang_ke' => $request->istri_yang_ke,
                'tgl_pemberkatan_perkawinan' => $request->tgl_pemberkatan_perkawinan,
                'tgl_melapor' => $request->tgl_melapor,
                'jam_pelaporan' => $request->jam_pelaporan,
                'agama_kepercayaan' => $request->agama_kepercayaan,
                'nama_organisasi_kepercayaan' => $request->nama_organisasi_kepercayaan,
                'nama_pengadilan' => $request->nama_pengadilan,
                'no_penetapan_pengadilan' => $request->no_penetapan_pengadilan,
                'tgl_penepatan_pengadilan' => $request->tgl_penepatan_pengadilan,
                'nama_pemuka_agama' => ucwords($request->nama_pemuka_agama),
                'no_surat_izin_dari_perwakilan' => $request->no_surat_izin_dari_perwakilan,
                'no_passport' => $request->no_passport,
                'perjanjian_perkawinan' => $request->perjanjian_perkawinan,
                'no_akta_notaris' => $request->no_akta_notaris,
                'tgl_akta_notaris' => $request->tgl_akta_notaris,
                'jumlah_anak' => $request->jumlah_anak,
            ]);
            $data_pembatalan_perkawinan->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'perceraian' && $layanan->id == 5) {
            $data_perceraian = DataPerceraian::create([
                'id_pelapor' => auth()->id(),
                'no_akta_perkawinan' => $request->no_akta_perkawinan,
                'tgl_akta_perkawinan' => $request->tgl_akta_perkawinan,
                'tempat_pencatatan_perkawinan' => $request->tempat_pencatatan_perkawinan,
                'nama_pengadilan' => $request->nama_pengadilan,
                'tgl_putusan_pengadilan' => $request->tgl_putusan_pengadilan,
                'no_putusan_pengadilan' => $request->no_putusan_pengadilan,
                'no_surat_panitera_pengadilan' => $request->no_surat_panitera_pengadilan,
                'tgl_surat_panitera_pengadilan' => $request->tgl_surat_panitera_pengadilan,
                'tgl_melapor' => $request->tgl_melapor,
            ]);
            $data_perceraian->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pembatalan-perceraian' && $layanan->id == 6) {
            $data_pembatalan_perceraian = DataPembatalanPerceraian::create([
                'id_pelapor' => auth()->id(),
                'no_akta_perceraian' => $request->no_akta_perceraian,
                'tgl_akta_perceraian' => $request->tgl_akta_perceraian,
                'tgl_pelaporan_perceraian_luar_negeri' => $request->tgl_pelaporan_perceraian_luar_negeri,
                'no_akta_perkawinan' => $request->no_akta_perkawinan,
                'tgl_akta_perkawinan' => $request->tgl_akta_perkawinan,
                'tempat_pencatatan_perkawinan' => $request->tempat_pencatatan_perkawinan,
                'nama_pengadilan' => $request->nama_pengadilan,
                'tgl_putusan_pengadilan' => $request->tgl_putusan_pengadilan,
                'no_putusan_pengadilan' => $request->no_putusan_pengadilan,
                'no_surat_panitera_pengadilan' => $request->no_surat_panitera_pengadilan,
                'tgl_surat_panitera_pengadilan' => $request->tgl_surat_panitera_pengadilan,
                'tgl_melapor' => $request->tgl_melapor,
            ]);
            $data_pembatalan_perceraian->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } else {
            return abort('404');
        }

        return redirect(url('app/beranda'))->with('success', 'Berhasil mengajukan pelaporan pencatatan sipil');
    }

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
