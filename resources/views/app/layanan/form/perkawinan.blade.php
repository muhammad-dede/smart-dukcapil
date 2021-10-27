<div id="data-perkawinan">
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah dari Suami</label>
        <div class="col-lg-8 fv-row">
            <input id="nik_ayah_dari_suami" type="text" name="nik_ayah_dari_suami"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                value="{{ old('nik_ayah_dari_suami') }}" />
            <small class="nik_ayah_dari_suami_error text-danger" id="error-text"></small>
            @error('nik_ayah_dari_suami')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah dari Suami</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_ayah_dari_suami" type="text" name="nama_ayah_dari_suami"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                value="{{ old('nama_ayah_dari_suami') }}" />
            <small class="nama_ayah_dari_suami_error text-danger" id="error-text"></small>
            @error('nama_ayah_dari_suami')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu dari Suami</label>
        <div class="col-lg-8 fv-row">
            <input id="nik_ibu_dari_suami" type="text" name="nik_ibu_dari_suami"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                value="{{ old('nik_ibu_dari_suami') }}" />
            <small class="nik_ibu_dari_suami_error text-danger" id="error-text"></small>
            @error('nik_ibu_dari_suami')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu dari Suami</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_ibu_dari_suami" type="text" name="nama_ibu_dari_suami"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Lilis"
                value="{{ old('nama_ibu_dari_suami') }}" />
            <small class="nama_ibu_dari_suami_error text-danger" id="error-text"></small>
            @error('nama_ibu_dari_suami')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah dari Istri</label>
        <div class="col-lg-8 fv-row">
            <input id="nik_ayah_dari_istri" type="text" name="nik_ayah_dari_istri"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                value="{{ old('nik_ayah_dari_istri') }}" />
            <small class="nik_ayah_dari_istri_error text-danger" id="error-text"></small>
            @error('nik_ayah_dari_istri')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah dari Istri</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_ayah_dari_istri" type="text" name="nama_ayah_dari_istri"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                value="{{ old('nama_ayah_dari_istri') }}" />
            <small class="nama_ayah_dari_istri_error text-danger" id="error-text"></small>
            @error('nama_ayah_dari_istri')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu dari Istri</label>
        <div class="col-lg-8 fv-row">
            <input id="nik_ibu_dari_istri" type="text" name="nik_ibu_dari_istri"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                value="{{ old('nik_ibu_dari_istri') }}" />
            <small class="nik_ibu_dari_istri_error text-danger" id="error-text"></small>
            @error('nik_ibu_dari_istri')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu dari Istri</label>
        <div class="col-lg-8 fv-row">
            <input id="nama_ibu_dari_istri" type="text" name="nama_ibu_dari_istri"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Lilis"
                value="{{ old('nama_ibu_dari_istri') }}" />
            <small class="nama_ibu_dari_istri_error text-danger" id="error-text"></small>
            @error('nama_ibu_dari_istri')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Status Perkawinan Sebelum Kawin</span>
        </label>
        <div class="col-lg-8 fv-row">
            <select id="status_perkawinan_sebelum_kawin" name="status_perkawinan_sebelum_kawin"
                aria-label="Pilih Status Perkawinan Sebelum Kawin" data-control="select2"
                data-placeholder="Pilih Status Perkawinan Sebelum Kawin..."
                class="form-select form-select-solid form-select-lg fw-bold">
                <option value="">Pilih Status Perkawinan Sebelum Kawin...</option>
                @foreach (get_status_kawin() as $status_kawin)
                    <option value="{{ $status_kawin->kode }}">{{ $status_kawin->nama }}
                    </option>
                @endforeach
            </select>
            <small class="status_perkawinan_sebelum_kawin_error text-danger" id="error-text"></small>
            @error('status_perkawinan_sebelum_kawin')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Perkawinan yang ke -</label>
        <div class="col-lg-8 fv-row">
            <input id="perkawinan_yang_ke" type="number" name="perkawinan_yang_ke"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 1"
                value="{{ old('perkawinan_yang_ke') }}" />
            <small class="perkawinan_yang_ke_error text-danger" id="error-text"></small>
            @error('perkawinan_yang_ke')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Istri yang ke - </label>
        <div class="col-lg-8 fv-row">
            <input id="istri_yang_ke" type="number" name="istri_yang_ke"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 2"
                value="{{ old('istri_yang_ke') }}" />
            <small class="istri_yang_ke_error text-danger" id="error-text"></small>
            @error('istri_yang_ke')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Pemberkatan
            Perkawinan</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_pemberkatan_perkawinan" type="date" name="tgl_pemberkatan_perkawinan"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_pemberkatan_perkawinan') }}" />
            <small class="tgl_pemberkatan_perkawinan_error text-danger" id="error-text"></small>
            @error('tgl_pemberkatan_perkawinan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Melapor</label>
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
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Jam Pelaporan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="jam_pelaporan" type="time" name="jam_pelaporan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 12:00"
                value="{{ old('jam_pelaporan') }}" />
            <small class="jam_pelaporan_error text-danger" id="error-text"></small>
            @error('jam_pelaporan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Agama Kepercayaan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <select id="agama_kepercayaan" name="agama_kepercayaan" aria-label="Pilih Agama Kepercayaan"
                data-control="select2" data-placeholder="Pilih Agama Kepercayaan..."
                class="form-select form-select-solid form-select-lg fw-bold">
                <option value="">Pilih Agama Kepercayaan...</option>
                @foreach (get_agama() as $agama)
                    <option value="{{ $agama->kode }}">{{ $agama->nama }}
                    </option>
                @endforeach
            </select>
            <small class="agama_kepercayaan_error text-danger" id="error-text"></small>
            @error('agama_kepercayaan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nama Organisasi Kepercayaan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="nama_organisasi_kepercayaan" type="text" name="nama_organisasi_kepercayaan"
                class="form-control form-control-lg form-control-solid" placeholder=""
                value="{{ old('nama_organisasi_kepercayaan') }}" />
            <small class="nama_organisasi_kepercayaan_error text-danger" id="error-text"></small>
            @error('nama_organisasi_kepercayaan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nama Pengadilan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="nama_pengadilan" type="text" name="nama_pengadilan"
                class="form-control form-control-lg form-control-solid"
                placeholder="Contoh : Pengadilan Agama Kota Cilegon" value="{{ old('nama_pengadilan') }}" />
            <small class="nama_pengadilan_error text-danger" id="error-text"></small>
            @error('nama_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nomor Penetapan Pengadilan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="no_penetapan_pengadilan" type="text" name="no_penetapan_pengadilan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                value="{{ old('nama_pengadilan') }}" />
            <small class="no_penetapan_pengadilan_error text-danger" id="error-text"></small>
            @error('no_penetapan_pengadilan')
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
            <input id="tgl_penepatan_pengadilan" type="date" name="tgl_penepatan_pengadilan"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_penepatan_pengadilan') }}" />
            <small class="tgl_penepatan_pengadilan_error text-danger" id="error-text"></small>
            @error('tgl_penepatan_pengadilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nama Pemuka Agama</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="nama_pemuka_agama" type="text" name="nama_pemuka_agama"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : Ustadz muhi"
                value="{{ old('nama_pemuka_agama') }}" />
            <small class="nama_pemuka_agama_error text-danger" id="error-text"></small>
            @error('nama_pemuka_agama')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nomor Surat Izin dari Perwakilan</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="no_surat_izin_dari_perwakilan" type="text" name="no_surat_izin_dari_perwakilan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                value="{{ old('no_surat_izin_dari_perwakilan') }}" />
            <small class="no_surat_izin_dari_perwakilan_error text-danger" id="error-text"></small>
            @error('no_surat_izin_dari_perwakilan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nomor Passport</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="no_passport" type="text" name="no_passport"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                value="{{ old('no_passport') }}" />
            <small class="no_passport_error text-danger" id="error-text"></small>
            @error('no_passport')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Perjanjian Perkawinan dibuat oleh Notaris</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="perjanjian_perkawinan" type="text" name="perjanjian_perkawinan"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : Dede, S.H"
                value="{{ old('perjanjian_perkawinan') }}" />
            <small class="perjanjian_perkawinan_error text-danger" id="error-text"></small>
            @error('perjanjian_perkawinan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Nomor Akta Notaris</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="no_akta_notaris" type="text" name="no_akta_notaris"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxx"
                value="{{ old('no_akta_notaris') }}" />
            <small class="no_akta_notaris_error text-danger" id="error-text"></small>
            @error('no_akta_notaris')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Akta Notaris</label>
        <div class="col-lg-8 fv-row">
            <input id="tgl_akta_notaris" type="date" name="tgl_akta_notaris"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                value="{{ old('tgl_akta_notaris') }}" />
            <small class="tgl_akta_notaris_error text-danger" id="error-text"></small>
            @error('tgl_akta_notaris')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-5">
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Jumlah Anak</span>
        </label>
        <div class="col-lg-8 fv-row">
            <input id="jumlah_anak" type="text" name="jumlah_anak"
                class="form-control form-control-lg form-control-solid" placeholder="Contoh : 2"
                value="{{ old('jumlah_anak') }}" />
            <small class="jumlah_anak_error text-danger" id="error-text"></small>
            @error('jumlah_anak')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
