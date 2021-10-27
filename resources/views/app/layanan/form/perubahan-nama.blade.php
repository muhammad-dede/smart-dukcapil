{{-- Data Anak --}}
<div id="data-perubahan-nama">
    {{-- <h2 class="mb-5 text-primary">Data Anak</h2> --}}
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lama</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_lama" type="text" name="nama_lama" class="form-control form-control-lg form-control-solid"
                placeholder="Contoh: Sarikam" value="{{ old('nama_lama') }}" />
            <small class="nama_lama_error text-danger" id="error-text"></small>
            @error('nama_lama')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Baru</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_baru" type="text" name="nama_baru" class="form-control form-control-lg form-control-solid"
                placeholder="Contoh: Kasman" value="{{ old('nama_baru') }}" />
            <small class="nama_baru_error text-danger" id="error-text"></small>
            @error('nama_baru')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">No Akta Kelahiran</label>
        <div class="col-lg-8 fv-row">
            <input id="nomor_akta_kelahiran" type="text" name="nomor_akta_kelahiran"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxx"
                value="{{ old('nomor_akta_kelahiran') }}" />
            <small class="nomor_akta_kelahiran_error text-danger" id="error-text"></small>
            @error('nomor_akta_kelahiran')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">Nama Ibu</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_ibu" type="text" name="nama_ibu" class="form-control form-control-lg form-control-solid"
                placeholder="Contoh: Riwan" value="{{ old('nama_ibu') }}" />
            <div class="form-text">Bagi yang dibawah Umur</div>
            <small class="nama_ibu_error text-danger" id="error-text"></small>
            @error('nama_ibu')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">NIK Ibu</label>
        <div class="col-lg-8 fv-row">
            <input id="nik_ibu" type="text" name="nik_ibu" class="form-control form-control-lg form-control-solid"
                placeholder="Contoh: xxxx" value="{{ old('nik_ibu') }}" />
            <small class="nik_ibu_error text-danger" id="error-text"></small>
            @error('nik_ibu')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Kewarganegaraan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <select id="kewarganegaraan" name="kewarganegaraan" aria-label="Pilih Kewarganegaraan"
                data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                class="form-select form-select-solid form-select-lg fw-bold">
                <option value="">Pilih Kewarganegaraan...</option>
                @foreach (get_negara() as $negara)
                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                    </option>
                @endforeach
            </select>
            <small class="kewarganegaraan_error text-danger" id="error-text"></small>
            @error('kewarganegaraan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Penetapan Pengadilan
        </label>
        <div class="col-lg-8 fv-row">
            <input id="nomor_penetapan_pengadilan" type="text" name="nomor_penetapan_pengadilan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                value="{{ old('nomor_penetapan_pengadilan') }}" />

            <small class="nomor_penetapan_pengadilan_error text-danger" id="error-text"></small>
            @error('nomor_penetapan_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Penetapan
            Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_penetapan_pengadilan" type="date" name="tgl_penetapan_pengadilan"
                class="form-control form-control-lg form-control-solid" placeholder=""
                value="{{ old('tgl_penetapan_pengadilan') }}" />
            <small class="tgl_penetapan_pengadilan_error text-danger" id="error-text"></small>
            @error('tgl_penetapan_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lembaga Pengadilan</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_lembaga_pengadilan" type="text" name="nama_lembaga_pengadilan"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('nama_lembaga_pengadilan') }}" />
            <small class="nama_lembaga_pengadilan_error text-danger" id="error-text"></small>
            @error('nama_lembaga_pengadilan')
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
