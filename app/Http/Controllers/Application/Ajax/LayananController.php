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
        if ($request->berkas_persyaratan) {
            foreach ($request->berkas_persyaratan as $index => $berkas) {
                $validator_berkas = Validator::make($request->all(), [
                    'berkas_persyaratan.' . $index . '.berkas' => 'required|mimes:' . $berkas['type_backend'] . '|max:1200',
                ], [
                    'berkas_persyaratan.' . $index . '.berkas.required' => 'Tidak boleh kosong!',
                    'berkas_persyaratan.' . $index . '.berkas.mimes' => 'Tipe file harus ' . $berkas['type_backend'],
                    'berkas_persyaratan.' . $index . '.berkas.max' => 'Ukuran file melebihi ketentuan',
                ]);

                if ($validator_berkas->fails()) {
                    return response()->json(['status' => 406, 'message' => $validator_berkas->errors()->toArray()]);
                }
            }
        }

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
        } elseif ($url == 'kematian') {
            return $this->validationKematian($request);
        } elseif ($url == 'pengangkatan-anak') {
            return $this->validationPengangkatanAnak($request);
        } elseif ($url == 'pengakuan-anak') {
            return $this->validationPengakuanAnak($request);
        } elseif ($url == 'pengesahan-anak') {
            return $this->validationPengesahanAnak($request);
        } elseif ($url == 'perubahan-nama') {
            return $this->validationPerubahanNama($request);
        } elseif ($url == 'perubahan-status-kewarganegaraan') {
            return $this->validationPerubahanStatusKewarganegaraan($request);
        } elseif ($url == 'pencatatan-peristiwa-penting-lainnya') {
            return $this->validationPencatatanPeristiwaPentingLainnya($request);
        } elseif ($url == 'pembetulan-akta') {
            return $this->validationPembetulanAkta($request);
        } elseif ($url == 'pembatalan-akta') {
            return $this->validationPembatalanAkta($request);
        } elseif ($url == 'pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri') {
            return $this->validationPelaporanPencatatanSipilDariLuarWilayahNkri($request);
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

    public function validationKematian($request)
    {
        $validator = Validator::make($request->all(), [
            'nik_kematian' => 'required|numeric',
            'nama_kematian' => 'required|string',
            'tgl_kematian' => 'required|date_format:Y-m-d',
            'pukul_kematian' => 'required|date_format:H:i',
            'sebab_kematian' => 'required|string',
            'tempat_kematian' => 'required|string',
            'menerangkan_kematian' => 'required|string',
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


    public function validationPengangkatanAnak($request)
    {
        $validator = Validator::make($request->all(), [
            'nama_anak_angkat' => 'required|string',
            'nomor_akta_kelahiran' => 'required|string',
            'tgl_penerbitan_akta_kelahiran' => 'required|date_format:Y-m-d',
            'dinas_yang_menerbitkan_akta_kelahiran' => 'required|string',
            'nama_ibu_kandung' => 'required|string',
            'nik_ibu_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ibu' => 'required|string',
            'nama_ayah_kandung' => 'required|string',
            'nik_ayah_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ayah' => 'required|string',
            'nama_ibu_angkat' => 'required|string',
            'nik_ibu_angkat' => 'required|numeric|digits:16,16',
            'nomor_passport_ibu' => 'required|string',
            'nama_ayah_angkat' => 'required|string',
            'nik_ayah_angkat' => 'required|numeric|digits:16,16',
            'nomor_passport_ayah' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'tgl_penetapan_pengadilan' => 'required|date_format:Y-m-d',
            'nomor_penetapan_pengadilan' => 'required|string',
            'nama_lembaga_penetapan_pengadilan' => 'required|string',
            'tempat_lembaga_penetapan_pengadilan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }


    public function validationPengakuanAnak($request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_akta_kelahiran' => 'required|string',
            'tgl_penerbitan_akta_kelahiran' => 'required|date_format:Y-m-d',
            'dinas_yang_menerbitkan_akta_kelahiran' => 'required|string',
            'tgl_kelahiran_anak' => 'required|date_format:Y-m-d',
            'tgl_perkawinan_agama' => 'required|date_format:Y-m-d',
            'nama_ibu_kandung' => 'required|string',
            'nik_ibu_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ibu' => 'required|string',
            'nama_ayah_kandung' => 'required|string',
            'nik_ayah_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ayah' => 'required|string',
            'tgl_penetapan_pengadilan' => 'required|date_format:Y-m-d',
            'nomor_penetapan_pengadilan' => 'required|string',
            'nama_lembaga_pengadilan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPengesahanAnak($request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_akta_kelahiran' => 'required|string',
            'tgl_penerbitan_akta_kelahiran' => 'required|date_format:Y-m-d',
            'dinas_yang_menerbitkan_akta_kelahiran' => 'required|string',
            'tgl_kelahiran_anak' => 'required|date_format:Y-m-d',
            'tgl_perkawinan_agama' => 'required|date_format:Y-m-d',
            'tgl_akta_perkawinan' => 'required|date_format:Y-m-d',
            'nama_ibu_kandung' => 'required|string',
            'nik_ibu_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ibu' => 'required|string',
            'nama_ayah_kandung' => 'required|string',
            'nik_ayah_kandung' => 'required|numeric|digits:16,16',
            'kewarganegaraan_ayah' => 'required|string',
            'tgl_penetapan_pengadilan' => 'required|date_format:Y-m-d',
            'nomor_penetapan_pengadilan' => 'required|string',
            'nama_lembaga_pengadilan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPerubahanNama($request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lama' => 'required|string',
            'nama_baru' => 'required|string',
            'nomor_akta_kelahiran' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'nomor_penetapan_pengadilan' => 'required|string',
            'tgl_penetapan_pengadilan' => 'required|date_format:Y-m-d',
            'nama_lembaga_pengadilan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPerubahanStatusKewarganegaraan($request)
    {
        $validator = Validator::make($request->all(), [
            'kewarganegaraan_baru' => 'required|string',
            'nomor_akta_kelahiran' => 'required|string',
            'nomor_akta_perkawinan' => 'required|string',
            'nama_suami_istri' => 'required|string',
            'nik_suami_istri' => 'required|numeric|digits:16,16',
            'nomor_passport' => 'required|string',
            'nomor_afidavit' => 'required|string',
            'nomor_keputusan_presiden' => 'required|string',
            'tgl_keputusan_presiden' => 'required|date_format:Y-m-d',
            'nomor_berita_acara_sumpah' => 'required|string',
            'nama_jabatan_yang_menerbitkan_bas' => 'required|string',
            'tgl_penerbitan_sumpah_janji' => 'required|date_format:Y-m-d',
            'nomor_keputusan_menteri' => 'required|string',
            'tgl_keputusan_menteri' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPencatatanPeristiwaPentingLainnya($request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_akta_kelahiran' => 'required|string',
            'jenis_kelamin_baru' => 'required',
            'jenis_kelamin_lama' => 'required',
            'nomor_penetapan_pengadilan' => 'required|string',
            'tgl_penetapan_pengadilan' => 'required|date_format:Y-m-d',
            'nama_lembaga_pengadilan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPembetulanAkta($request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_akta_yang_akan_dibetulkan' => 'required|string',
            'nama_ayah_ibu_wali' => 'required|string',
            'nik_ayah_ibu_wali' => 'required|numeric|digits:16,16',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPembatalanAkta($request)
    {
        $validator = Validator::make($request->all(), [
            'akta_yang_dibatalkan' => 'required|string',
            'nomor_akta_yang_dibatalkan' => 'required|string',
            'nama_pengadilan' => 'required|string',
            'nomor_putusan_pengadilan' => 'required|string',
            'tgl_putusan_pengadilan' => 'required|date_format:Y-m-d'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }

    public function validationPelaporanPencatatanSipilDariLuarWilayahNkri($request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_peristiwa_penting' => 'required|string',
            'nomor_surat_keterangan_pelaporan_perwakilan_ri' => 'required|string',
            'tgl_surat_keterangan_pelaporan_perwakilan_ri' => 'required|date_format:Y-m-d',
            'kantor_perwakilan_yang_melakukan_pencatatan' => 'required|string',
            'nomor_bukti_pencatatan_sipil_dari_negara_setempat' => 'required|string',
            'tgl_penerbitan_dari_negara_setempat' => 'required|date_format:Y-m-d'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        return response()->json(['status' => 200, 'message' => 'Success']);
    }
}
