<div id="data-pembatalan-perceraian">
    <h2 class="mb-5 text-primary">Data Pembatalan Perceraian</h2>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Akta Perceraian</label>
        <div class="col-lg-8 fv-row">
            <input id="no_akta_perceraian" type="text" name="no_akta_perceraian"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                value="{{ old('no_akta_perceraian') }}" />
            <small class="no_akta_perceraian_error text-danger" id="error-text"></small>
            @error('no_akta_perceraian')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Akta Perceraian</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_akta_perceraian" type="date" name="tgl_akta_perceraian"
                class="form-control form-control-lg form-control-solid" placeholder=""
                value="{{ old('tgl_akta_perceraian') }}" />
            <small class="tgl_akta_perceraian_error text-danger" id="error-text"></small>
            @error('tgl_akta_perceraian')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Pelaporan Perceraian dari
            Luar Negeri</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_pelaporan_perceraian_luar_negeri" type="date" name="tgl_pelaporan_perceraian_luar_negeri"
                class="form-control form-control-lg form-control-solid" placeholder=""
                value="{{ old('tgl_pelaporan_perceraian_luar_negeri') }}" />
            <small class="tgl_pelaporan_perceraian_luar_negeri_error text-danger" id="error-text"></small>
            @error('tgl_pelaporan_perceraian_luar_negeri')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
<div class="py-4 text-muted">
    <hr>
</div>
<div id="data-perceraian">
    <h2 class="mb-5 text-primary">Data Perceraian</h2>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Akta Perkawinan</label>
        <div class="col-lg-8 fv-row">
            <input id="no_akta_perkawinan" type="text" name="no_akta_perkawinan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                value="{{ old('no_akta_perkawinan') }}" />
            <small class="no_akta_perkawinan_error text-danger" id="error-text"></small>
            @error('no_akta_perkawinan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Akta Perkawinan</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_akta_perkawinan" type="date" name="tgl_akta_perkawinan"
                class="form-control form-control-lg form-control-solid" placeholder=""
                value="{{ old('tgl_akta_perkawinan') }}" />
            <small class="tgl_akta_perkawinan_error text-danger" id="error-text"></small>
            @error('tgl_akta_perkawinan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat Pencatatan
            Perkawinan</label>
        <div class="col-lg-8 fv-row">
            <input id="tempat_pencatatan_perkawinan" type="text" name="tempat_pencatatan_perkawinan"
                class="form-control form-control-lg form-control-solid"
                placeholder="Contoh : Pengadilan Agama Kota Cilegon"
                value="{{ old('tempat_pencatatan_perkawinan') }}" />
            <small class="tempat_pencatatan_perkawinan_error text-danger" id="error-text"></small>
            @error('tempat_pencatatan_perkawinan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_pengadilan" type="text" name="nama_pengadilan"
                class="form-control form-control-lg form-control-solid"
                placeholder="Contoh: Pengadilan Agama Kota Cilegon" value="{{ old('nama_pengadilan') }}" />
            <small class="nama_pengadilan_error text-danger" id="error-text"></small>
            @error('nama_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Putusan Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_putusan_pengadilan" type="date" name="tgl_putusan_pengadilan"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_putusan_pengadilan') }}" />
            <small class="tgl_putusan_pengadilan_error text-danger" id="error-text"></small>
            @error('tgl_putusan_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Putusan Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="no_putusan_pengadilan" type="text" name="no_putusan_pengadilan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                value="{{ old('no_putusan_pengadilan') }}" />
            <small class="no_putusan_pengadilan_error text-danger" id="error-text"></small>
            @error('no_putusan_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Surat Keterangan Panitera
            Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="no_surat_panitera_pengadilan" type="text" name="no_surat_panitera_pengadilan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                value="{{ old('no_surat_panitera_pengadilan') }}" />
            <small class="no_surat_panitera_pengadilan_error text-danger" id="error-text"></small>
            @error('no_surat_panitera_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Surat Keterangan Panitera
            Pengadilan
        </label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_surat_panitera_pengadilan" type="date" name="tgl_surat_panitera_pengadilan"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_surat_panitera_pengadilan') }}" />
            <small class="tgl_surat_panitera_pengadilan_error text-danger" id="error-text"></small>
            @error('tgl_surat_panitera_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Melapor
        </label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_melapor" type="date" name="tgl_melapor"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_melapor') }}" />
            <small class="tgl_melapor_error text-danger" id="error-text"></small>
            @error('tgl_melapor')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
