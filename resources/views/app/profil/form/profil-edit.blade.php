<div class="card card-flush mb-6 mb-xl-9">
    <form action="{{ url('app/profil/update') }}" method="POST" id="form-profil-update" enctype="multipart/form-data">
        @csrf
        <div class="card-body p-9">
            <div id="profil-edit">
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Foto Profil</label>
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ asset('') }}assets/media/avatars/blank.png)">
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset('') }}images/profil/{{ auth()->user()->profil }})">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Profil">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input id="profil" type="file" name="profil" accept=".png, .jpg, .jpeg" />
                                <input id="profil_old" type="hidden" name="profil_old"
                                    value="{{ auth()->user()->profil }}" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Profil">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Tipe File: png, jpg, jpeg.</div>
                        <small class="profil_error text-danger" id="error-text"></small>
                        @error('profil')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                    <div class="col-lg-8 fv-row">
                        <input id="nik" type="text" name="nik" class="form-control form-control-lg form-control-solid"
                            placeholder="Contoh: 360408**********" value="{{ auth()->user()->nik ?? old('nik') }}" />
                        <small class="nik_error text-danger" id="error-text"></small>
                        @error('nik')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">No KK</label>
                    <div class="col-lg-8 fv-row">
                        <input id="no_kk" type="text" name="no_kk"
                            class="form-control form-control-lg form-control-solid"
                            placeholder="Contoh: 360309**********"
                            value="{{ auth()->user()->no_kk ?? old('no_kk') }}" />
                        <small class="no_kk_error text-danger" id="error-text"></small>
                        @error('no_kk')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama
                        Lengkap</label>
                    <div class="col-lg-8 fv-row">
                        <input id="nama_lengkap" type="text" name="nama_lengkap"
                            class="form-control form-control-lg form-control-solid" placeholder="Contoh: Budi Riyadi"
                            value="{{ auth()->user()->nama_lengkap ?? old('nama_lengkap') }}" />
                        <small class="nama_lengkap_error text-danger" id="error-text"></small>
                        @error('nama_lengkap')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat, Tanggal
                        Lahir</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 fv-row">
                                <input id="tempat_lahir" type="text" name="tempat_lahir"
                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Contoh: Cilegon"
                                    value="{{ auth()->user()->tempat_lahir ?? old('tempat_lahir') }}" />
                                <small class="tempat_lahir_error text-danger" id="error-text"></small>
                                @error('tempat_lahir')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 fv-row">
                                <input id="tgl_lahir" type="date" name="tgl_lahir"
                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Contoh: Cilegon"
                                    value="{{ auth()->user()->tgl_lahir ?? old('tgl_lahir') }}" />
                                <small class="tgl_lahir_error text-danger" id="error-text"></small>
                                @error('tgl_lahir')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama
                        Ibu</label>
                    <div class="col-lg-8 fv-row">
                        <input id="nama_ibu" type="text" name="nama_ibu"
                            class="form-control form-control-lg form-control-solid" placeholder="Contoh: Budi Riyadi"
                            value="{{ auth()->user()->nama_ibu ?? old('nama_ibu') }}" />
                        <small class="nama_ibu_error text-danger" id="error-text"></small>
                        @error('nama_ibu')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Telepon/No
                        Handphone</label>
                    <div class="col-lg-8 fv-row">
                        <input id="telp" type="text" name="telp" class="form-control form-control-lg form-control-solid"
                            placeholder="Contoh: Budi Riyadi" value="{{ auth()->user()->telp ?? old('telp') }}" />
                        <small class="telp_error text-danger" id="error-text"></small>
                        @error('telp')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Kewarganegaraan</label>
                    <div class="col-lg-8 fv-row">
                        <select id="kewarganegaraan" name="kewarganegaraan" aria-label="Pilih Kewarganegaraan"
                            data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                            class="form-select form-select-solid form-select-lg fw-bold">
                            <option value="">Pilih Kewarganegaraan...</option>
                            @foreach (get_negara() as $negara)
                                <option value="{{ $negara->kode }}"
                                    {{ auth()->user()->kewarganegaraan == $negara->kode ? 'selected' : '' }}>
                                    {{ $negara->nama }}
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
            </div>
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mt-10">
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="black" />
                        <path
                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                            fill="black" />
                    </svg>
                </span>
                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <div class="mb-md-0 fw-bold">
                        <h4 class="text-gray-900 fw-bolder">Catatan</h4>
                        <div class="fs-6 text-gray-700 pe-7">Data diri harus sesuai dengan KTP
                            dan Kartu Keluarga!</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a href="{{ url('app/beranda') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
            <button type="button" class="btn btn-primary" id="btn-update-profil">Simpan</button>
        </div>
    </form>
</div>
