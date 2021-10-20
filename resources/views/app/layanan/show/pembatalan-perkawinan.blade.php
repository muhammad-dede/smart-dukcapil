    <div class="card mb-5 mb-xl-10" id="kt_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Pengajuan {{ $pengajuan->layanan->layanan }}</h3>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary align-self-center">Edit
                Pengajuan</a>
        </div>
        <div class="card-body p-9">
            <div
                class="notice d-flex bg-light-{{ $status_pengajuan->color }} rounded border-{{ $status_pengajuan->color }} border border-dashed p-6 mb-10">
                <span class="svg-icon svg-icon-2tx svg-icon-{{ $status_pengajuan->color }} me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                    </svg>
                </span>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-bold">
                        <h4 class="text-gray-900 fw-bolder">{{ $status_pengajuan->status }}</h4>
                        <div class="fs-6 text-gray-700">{{ $status_pengajuan->text }}</div>
                    </div>
                </div>
            </div>
            <div id="data-pelapor">
                <h3 class="text-primary mb-5">Data Pelapor</h3>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Lengkap</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">{{ ucwords(auth()->user()->nama_lengkap) }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">NIK</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->nik }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">No Kartu Keluarga</label>
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->no_kk }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ !empty(auth()->user()->kewarganegaraan) ? auth()->user()->_kewarganegaraan->nama : '' }}</span>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-muted">
                <hr>
            </div>

            <div id="data-pembatalan-perkawinan">
                <h3 class="text-primary mb-5">Data Pembatalan Perkawinan</h3>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Perkawinan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_perkawinan)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nomor Akta Perkawinan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_akta_perkawinan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Akta Perkawinan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_akta_perkawinan)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan_pembatalan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nomor Putusan Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_putusan_pengadilan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Putusan Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_putusan_pengadilan)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Pelaporan Perkawinan di Luar Negeri</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_pelaporan_perkawinan_luar_negeri)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">NIK Ayah Dari Suami</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_dari_suami }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Ayah Dari Suami</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_dari_suami }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">NIK Ibu Dari Suami</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_dari_suami }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Ibu Dari Suami</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_dari_suami }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">NIK Ayah Dari Istri</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_dari_istri }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Ayah Dari Istri</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_dari_istri }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">NIK Ibu Dari Istri</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_dari_istri }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Ibu Dari Istri</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_dari_istri }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Status Perkawinan Sebelum Kawin</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->status_perkawinan_sebelum_kawin) ? $pengajuan->data_pengajuan->statusPerkawinanSebelumKawin->nama : '' }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Perkawinan Yang Ke</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->perkawinan_yang_ke }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Istri Yang Ke</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->istri_yang_ke }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Pemberkatan Perkawinan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_pemberkatan_perkawinan)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Melapor</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_melapor)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Jam Pelaporan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jam_pelaporan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Agama Kepercayaan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->agama_kepercayaan) ? $pengajuan->data_pengajuan->agamaKepercayaan->nama : '' }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Organisasi Kepercayaan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_organisasi_kepercayaan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">No Penetapan Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_penetapan_pengadilan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Penetapan Pengadilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penepatan_pengadilan)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Nama Pemuka Agama</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pemuka_agama }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">No Surat Izin Dari Perwakilan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_surat_izin_dari_perwakilan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">No Passport</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_passport }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Perjanjian Perkawinan</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->perjanjian_perkawinan }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">No Akta Notaris</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_akta_notaris }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal Akta Notaris</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_akta_notaris)->isoFormat('D MMMM Y') }}</span>
                    </div>
                </div>
                <div class="row mb-7">
                    <label class="col-lg-4 fw-bold text-muted">Jumlah Anak</label>
                    <div class="col-lg-8">
                        <span
                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jumlah_anak }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
