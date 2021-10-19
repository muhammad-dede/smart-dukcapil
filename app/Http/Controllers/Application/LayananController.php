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
use Illuminate\Http\Request;

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
}
