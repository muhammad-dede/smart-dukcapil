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

        <div id="data-pembatalam-akta">
            <h3 class="text-primary mb-5">Data Pembatalan Akta</h3>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted"> Akta yang dibatalkan</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->akta_yang_dibatalkan }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Nomor Akta yang dibatalkan</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_yang_dibatalkan }}</span>
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
                <label class="col-lg-4 fw-bold text-muted">Nomor Putusan Pengadilan</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_putusan_pengadilan }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Tanggal Putusan Pengadilan</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_putusan_pengadilan)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
