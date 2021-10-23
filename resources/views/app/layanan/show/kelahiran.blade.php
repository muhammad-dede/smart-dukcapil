<div class="card mb-5 mb-xl-10" id="kt_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Pengajuan {{ $pengajuan->layanan->layanan }}</h3>
        </div>
        {{-- <a href="javascript:void(0)" class="btn btn-primary align-self-center">Edit
            Pengajuan</a> --}}
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
                    <div class="fs-6 text-gray-700">{{ $status_pengajuan->text }}
                        {{-- <a class="fw-bolder" href="#">Add Payment
                            Method</a> --}}
                    </div>
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
        <div id="data-anak">
            <h3 class="text-primary mb-5">Data Anak</h3>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nama</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_anak) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Jenis Kelamin</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jenis_kelamin_anak == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tempat Dilahirkan</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->tmpt_dilahirkan_anak) ? $pengajuan->data_pengajuan->tempatDilahirkanAnak->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tempat Kelahiran</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->tmpt_kelahiran_anak }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Hari Kelahiran</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->hari_lahir_anak) ? $pengajuan->data_pengajuan->hariLahirAnak->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_anak)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Waktu Lahir</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->waktu_lahir_anak }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Jenis Kelahiran</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->jenis_kelahiran_anak) ? $pengajuan->data_pengajuan->jenisKelahiranAnak->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Kelahiran Ke</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->kelahiran_ke_anak }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Penolong Kelahiran</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->penolong_kelahiran_anak) ? $pengajuan->data_pengajuan->penolongKelahiranAnak->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Berat Bayi</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->berat_bayi_anak }}
                        KG</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Panjang Bayi</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->panjang_bayi_anak }}
                        CM</span>
                </div>
            </div>
        </div>
        <div class="mb-3 text-muted">
            <hr>
        </div>
        <div id="data-ortu">
            <h3 class="text-primary mb-5">Data Ortu</h3>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nama Ayah</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_ayah) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">NIK Ayah</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tempat Lahir Ayah</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->tempat_lahir_ayah) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir Ayah</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_ayah)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Ayah</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ayah) ? $pengajuan->data_pengajuan->kewarganegaraanAyah->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nama Ibu</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_ibu) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">NIK Ibu</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tempat Lahir Ibu</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->tempat_lahir_ibu) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir Ibu</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_ibu)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Ibu</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ibu) ? $pengajuan->data_pengajuan->kewarganegaraanIbu->nama : '' }}</span>
                </div>
            </div>
        </div>
        <div class="mb-3 text-muted">
            <hr>
        </div>
        <div id="data-saksi">
            <h3 class="text-primary mb-5">Data Saksi</h3>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nama Saksi 1</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_saksi_1) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">NIK Saksi 1</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_saksi_1 }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">No KK Saksi 1</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_kk_saksi_1 }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Saksi 1</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_saksi_1) ? $pengajuan->data_pengajuan->kewarganegaraanSaksi1->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nama Saksi 2</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_saksi_2) }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">NIK Saksi 1</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_saksi_2 }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">No KK Saksi 1</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_kk_saksi_2 }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Saksi 1</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_saksi_2) ? $pengajuan->data_pengajuan->kewarganegaraanSaksi2->nama : '' }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
