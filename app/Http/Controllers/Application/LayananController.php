<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\DataKelahiran;
use App\Models\DataKematian;
use App\Models\DataLahirMati;
use App\Models\DataPembatalanPerceraian;
use App\Models\DataPembatalanPerkawinan;
use App\Models\DataPerceraian;
use App\Models\DataPerkawinan;
use App\Models\DataPengakuanAnak;
use App\Models\DataPengesahanAnak;
use App\Models\DataPerubahanNama;
use App\Models\DataPerubahanStatusKewarganegaraan;
use App\Models\DataPencatatanPeristiwaPentingLainnya;
use App\Models\DataPembetulanAkta;
use App\Models\DataPembatalanAkta;
use App\Models\DataPelaporanPencatatanSipilDariLuarWilayahNkri;
use App\Models\Layanan;
use App\Models\DataPengangkatanAnak;
use App\Models\Pengajuan;
use App\Models\PengajuanBerkas;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

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
        // Cek jika url tidak ada
        $layanan = Layanan::with('persyaratan')->where('url', $url)->first();
        if (!$layanan) {
            return abort('404');
        }

        // Cek duplicate pengajuan
        $pengajuan = Pengajuan::where('id_layanan', $layanan->id)->where('id_pelapor', auth()->id())->first();
        if (Carbon::parse($pengajuan->tgl)->toDateString() == date('Y-m-d')) {
            return redirect()->back()->with('unique', 'Anda sudah melakukan pengajuan pada hari ini, lakukan pengajuan pada hari berikutnya!');
        } elseif ($pengajuan->status == 'V') {
            return redirect()->back()->with('unique', 'Anda memiliki pengajuan yang belum terselesaikan!');
        }

        $berkas_persyaratan = $layanan->persyaratan;
        return view('app.layanan.create', compact('layanan', 'berkas_persyaratan'));
    }

    public function store(Request $request, $url)
    {
        $layanan = Layanan::where('url', $url)->first();

        // insert data pengajuan
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
            $pengajuan = $data_kelahiran->pengajuan()->create([
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
            $pengajuan =  $data_lahir_mati->pengajuan()->create([
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
            $pengajuan = $data_perkawinan->pengajuan()->create([
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
            $pengajuan = $data_pembatalan_perkawinan->pengajuan()->create([
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
            $pengajuan = $data_perceraian->pengajuan()->create([
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
            $pengajuan = $data_pembatalan_perceraian->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'kematian' && $layanan->id == 7) {
            $data_kematian = DataKematian::create([
                'id_pelapor' => auth()->id(),
                'nik_kematian' => $request->nik_kematian,
                'nama_kematian' => ucwords($request->nama_kematian),
                'tgl_kematian' => $request->tgl_kematian,
                'pukul_kematian' => $request->pukul_kematian,
                'sebab_kematian' => $request->sebab_kematian,
                'tempat_kematian' => ucwords($request->tempat_kematian),
                'menerangkan_kematian' => $request->menerangkan_kematian,
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
            $pengajuan = $data_kematian->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pengangkatan-anak' && $layanan->id == 8) {
            $data_pengangkatan_anak = DataPengangkatanAnak::create([
                'id_pelapor' => auth()->id(),
                'nama_anak_angkat' => ucwords($request->nama_anak_angkat),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'tgl_penerbitan_akta_kelahiran' => $request->tgl_penerbitan_akta_kelahiran,
                'dinas_yang_menerbitkan_akta_kelahiran' => ucwords($request->dinas_yang_menerbitkan_akta_kelahiran),
                'nama_ibu_kandung' =>  ucwords($request->nama_ibu_kandung),
                'nik_ibu_kandung' => $request->nik_ibu_kandung,
                'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
                'nama_ayah_kandung' => ucwords($request->nama_ayah_kandung),
                'nik_ayah_kandung' => $request->nik_ayah_kandung,
                'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
                'nama_ibu_angkat' => ucwords($request->nama_ibu_angkat),
                'nik_ibu_angkat' => $request->nik_ibu_angkat,
                'nomor_passport_ibu' => $request->nomor_passport_ibu,
                'nama_ayah_angkat' => ucwords($request->nama_ayah_angkat),
                'nik_ayah_angkat' => $request->nik_ayah_angkat,
                'nomor_passport_ayah' => $request->nomor_passport_ayah,
                'nama_pengadilan' => ucwords($request->nama_pengadilan),
                'tgl_penetapan_pengadilan' => $request->tgl_penetapan_pengadilan,
                'nomor_penetapan_pengadilan' => $request->nomor_penetapan_pengadilan,
                'nama_lembaga_penetapan_pengadilan' => ucwords($request->nama_lembaga_penetapan_pengadilan),
                'tempat_lembaga_penetapan_pengadilan' => ucwords($request->tempat_lembaga_penetapan_pengadilan),
            ]);
            $pengajuan = $data_pengangkatan_anak->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pengakuan-anak' && $layanan->id == 9) {
            $data_pengakuan_anak = DataPengakuanAnak::create([
                'id_pelapor' => auth()->id(),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'tgl_penerbitan_akta_kelahiran' => $request->tgl_penerbitan_akta_kelahiran,
                'dinas_yang_menerbitkan_akta_kelahiran' => ucwords($request->dinas_yang_menerbitkan_akta_kelahiran),
                'tgl_kelahiran_anak' => $request->tgl_kelahiran_anak,
                'tgl_perkawinan_agama' => $request->tgl_perkawinan_agama,
                'nama_ibu_kandung' =>  ucwords($request->nama_ibu_kandung),
                'nik_ibu_kandung' => $request->nik_ibu_kandung,
                'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
                'nama_ayah_kandung' => ucwords($request->nama_ayah_kandung),
                'nik_ayah_kandung' => $request->nik_ayah_kandung,
                'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
                'tgl_penetapan_pengadilan' => $request->tgl_penetapan_pengadilan,
                'nomor_penetapan_pengadilan' => $request->nomor_penetapan_pengadilan,
                'nama_lembaga_pengadilan' => ucwords($request->nama_lembaga_pengadilan),
            ]);
            $pengajuan = $data_pengakuan_anak->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pengesahan-anak' && $layanan->id == 10) {
            $data_pengesahan_anak = DataPengesahanAnak::create([
                'id_pelapor' => auth()->id(),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'tgl_penerbitan_akta_kelahiran' => $request->tgl_penerbitan_akta_kelahiran,
                'dinas_yang_menerbitkan_akta_kelahiran' => ucwords($request->dinas_yang_menerbitkan_akta_kelahiran),
                'tgl_kelahiran_anak' => $request->tgl_kelahiran_anak,
                'tgl_perkawinan_agama' => $request->tgl_perkawinan_agama,
                'tgl_akta_perkawinan' => $request->tgl_akta_perkawinan,
                'nama_ibu_kandung' =>  ucwords($request->nama_ibu_kandung),
                'nik_ibu_kandung' => $request->nik_ibu_kandung,
                'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
                'nama_ayah_kandung' => ucwords($request->nama_ayah_kandung),
                'nik_ayah_kandung' => $request->nik_ayah_kandung,
                'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
                'tgl_penetapan_pengadilan' => $request->tgl_penetapan_pengadilan,
                'nomor_penetapan_pengadilan' => $request->nomor_penetapan_pengadilan,
                'nama_lembaga_pengadilan' => ucwords($request->nama_lembaga_pengadilan),
            ]);
            $pengajuan = $data_pengesahan_anak->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'perubahan-nama' && $layanan->id == 11) {
            $data_perubahan_nama = DataPerubahanNama::create([
                'id_pelapor' => auth()->id(),
                'nama_lama' => ucwords($request->nama_lama),
                'nama_baru' => ucwords($request->nama_baru),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'nama_ibu' =>  ucwords($request->nama_ibu),
                'nik_ibu' => $request->nik_ibu,
                'kewarganegaraan' => $request->kewarganegaraan,
                'nomor_penetapan_pengadilan' => $request->nomor_penetapan_pengadilan,
                'tgl_penetapan_pengadilan' => $request->tgl_penetapan_pengadilan,
                'nama_lembaga_pengadilan' => ucwords($request->nama_lembaga_pengadilan),
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'perubahan-status-kewarganegaraan' && $layanan->id == 12) {
            $data_perubahan_nama = DataPerubahanStatusKewarganegaraan::create([
                'id_pelapor' => auth()->id(),
                'kewarganegaraan_baru' => ucwords($request->kewarganegaraan_baru),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'nomor_akta_perkawinan' => $request->nomor_akta_perkawinan,
                'nama_suami_istri' => ucwords($request->nama_suami_istri),
                'nik_suami_istri' => $request->nik_suami_istri,
                'nomor_passport' => $request->nomor_passport,
                'nomor_afidavit' => $request->nomor_afidavit,
                'nomor_keputusan_presiden' => $request->nomor_keputusan_presiden,
                'tgl_keputusan_presiden' => $request->tgl_keputusan_presiden,
                'nomor_berita_acara_sumpah' => $request->nomor_berita_acara_sumpah,
                'nama_jabatan_yang_menerbitkan_bas' => ucwords($request->nama_jabatan_yang_menerbitkan_bas),
                'tgl_penerbitan_sumpah_janji' => $request->tgl_penerbitan_sumpah_janji,
                'nomor_keputusan_menteri' => $request->nomor_keputusan_menteri,
                'tgl_keputusan_menteri' => $request->tgl_keputusan_menteri,
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pencatatan-peristiwa-penting-lainnya' && $layanan->id == 13) {
            $data_perubahan_nama = DataPencatatanPeristiwaPentingLainnya::create([
                'id_pelapor' => auth()->id(),
                'nomor_akta_kelahiran' => $request->nomor_akta_kelahiran,
                'jenis_kelamin_baru' => $request->jenis_kelamin_baru,
                'jenis_kelamin_lama' => $request->jenis_kelamin_lama,
                'nomor_penetapan_pengadilan' => $request->nomor_penetapan_pengadilan,
                'tgl_penetapan_pengadilan' => $request->tgl_penetapan_pengadilan,
                'nama_lembaga_pengadilan' => $request->nama_lembaga_pengadilan,
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pembetulan-akta' && $layanan->id == 14) {
            $data_perubahan_nama = DataPembetulanAkta::create([
                'id_pelapor' => auth()->id(),
                'nomor_akta_yang_akan_dibetulkan' => $request->nomor_akta_yang_akan_dibetulkan,
                'nama_ayah_ibu_wali' => ucwords($request->nama_ayah_ibu_wali),
                'nik_ayah_ibu_wali' => $request->nik_ayah_ibu_wali,
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pembatalan-akta' && $layanan->id == 15) {
            $data_perubahan_nama = DataPembatalanAkta::create([
                'id_pelapor' => auth()->id(),
                'akta_yang_dibatalkan' => ucwords($request->akta_yang_dibatalkan),
                'nomor_akta_yang_dibatalkan' => $request->nomor_akta_yang_dibatalkan,
                'nama_pengadilan' => ucwords($request->nama_pengadilan),
                'nomor_putusan_pengadilan' => $request->nomor_putusan_pengadilan,
                'tgl_putusan_pengadilan' => $request->tgl_putusan_pengadilan
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } elseif ($layanan->url == 'pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri' && $layanan->id == 16) {
            $data_perubahan_nama = DataPelaporanPencatatanSipilDariLuarWilayahNkri::create([
                'id_pelapor' => auth()->id(),
                'jenis_peristiwa_penting' => $request->jenis_peristiwa_penting,
                'nomor_surat_keterangan_pelaporan_perwakilan_ri' => $request->nomor_surat_keterangan_pelaporan_perwakilan_ri,
                'tgl_surat_keterangan_pelaporan_perwakilan_ri' => $request->tgl_surat_keterangan_pelaporan_perwakilan_ri,
                'kantor_perwakilan_yang_melakukan_pencatatan' => ucwords($request->kantor_perwakilan_yang_melakukan_pencatatan),
                'nomor_bukti_pencatatan_sipil_dari_negara_setempat' => $request->nomor_bukti_pencatatan_sipil_dari_negara_setempat,
                'tgl_penerbitan_dari_negara_setempat' => $request->tgl_penerbitan_dari_negara_setempat,
            ]);
            $pengajuan = $data_perubahan_nama->pengajuan()->create([
                'id_layanan' => $layanan->id,
                'id_pelapor' => auth()->id(),
            ]);
        } else {
            return abort('404');
        }

        // upload berkas
        if ($request->berkas_persyaratan) {
            foreach ($request->berkas_persyaratan as $index => $persyaratan) {
                $berkas_persyaratan = $persyaratan['berkas'];
                $berkas = time() . $persyaratan['id_persyaratan'] . '.' . $berkas_persyaratan->extension();
                $berkas_persyaratan->move(public_path('berkas'), $berkas);

                PengajuanBerkas::create([
                    'id_pengajuan' => $pengajuan->id,
                    'id_persyaratan' => $persyaratan['id_persyaratan'],
                    'berkas' => $berkas,
                    'upload' => true,
                    'valid' => false,
                ]);
            }
        }

        return redirect(url('app/beranda'))->with('success', 'Berhasil mengajukan pelaporan pencatatan sipil');
    }
}
