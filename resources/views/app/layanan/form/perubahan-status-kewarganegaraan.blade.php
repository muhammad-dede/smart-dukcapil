  {{-- Data Anak --}}
  <div id="data-perubahan-status-keluarga">
      {{-- <h2 class="mb-5 text-primary">Data Anak</h2> --}}
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Kewargangeraan Baru</label>
          <div class="col-lg-8 fv-row">
              <input id="kewarganegaraan_baru" type="text" name="kewarganegaraan_baru"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('kewarganegaraan_baru') }}" />
              <small class="kewarganegaraan_baru_error text-danger" id="error-text"></small>
              @error('kewarganegaraan_baru')
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
          <label class="col-lg-4 col-form-label required fw-bold fs-6">No Akta Perkawinan</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_akta_perkawinan" type="text" name="nomor_akta_perkawinan"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxx"
                  value="{{ old('nomor_akta_perkawinan') }}" />
              <small class="nomor_akta_perkawinan_error text-danger" id="error-text"></small>
              @error('nomor_akta_perkawinan')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Suami / Istri</label>
          <div class="col-lg-8 fv-row">
              <input id="nama_suami_istri" type="text" name="nama_suami_istri"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: Riwan"
                  value="{{ old('nama_suami_istri') }}" />

              <small class="nama_suami_istri_error text-danger" id="error-text"></small>
              @error('nama_suami_istri')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Suami / Istri</label>
          <div class="col-lg-8 fv-row">
              <input id="nik_suami_istri" type="text" name="nik_suami_istri"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                  value="{{ old('nik_suami_istri') }}" />

              <small class="nik_suami_istri_error text-danger" id="error-text"></small>
              @error('nik_suami_istri')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Passport</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_passport" type="text" name="nomor_passport"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                  value="{{ old('nomor_passport') }}" />
              <small class="nomor_passport_error text-danger" id="error-text"></small>
              @error('nomor_passport')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Afidavit</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_afidavit" type="text" name="nomor_afidavit"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                  value="{{ old('nomor_afidavit') }}" />
              <small class="nomor_afidavit_error text-danger" id="error-text"></small>
              @error('nomor_afidavit')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Keputusan Presiden</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_keputusan_presiden" type="text" name="nomor_keputusan_presiden"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                  value="{{ old('nomor_keputusan_presiden') }}" />
              <small class="nomor_keputusan_presiden_error text-danger" id="error-text"></small>
              @error('nomor_keputusan_presiden')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Keputusan Presiden</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_keputusan_presiden" type="date" name="tgl_keputusan_presiden"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_keputusan_presiden') }}" />
              <small class="tgl_keputusan_presiden_error text-danger" id="error-text"></small>
              @error('tgl_keputusan_presiden')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Berita Acara Sumpah / Janji
              Setia</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_berita_acara_sumpah" type="text" name="nomor_berita_acara_sumpah"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                  value="{{ old('nomor_berita_acara_sumpah') }}" />
              <small class="nomor_berita_acara_sumpah_error text-danger" id="error-text"></small>
              @error('nomor_berita_acara_sumpah')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Jabatan yang Menerbitkan
              BAS</label>
          <div class="col-lg-8 fv-row">
              <input id="nama_jabatan_yang_menerbitkan_bas" type="text" name="nama_jabatan_yang_menerbitkan_bas"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('nama_jabatan_yang_menerbitkan_bas') }}" />
              <small class="nama_jabatan_yang_menerbitkan_bas_error text-danger" id="error-text"></small>
              @error('nama_jabatan_yang_menerbitkan_bas')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Terbit Sumpah Janji
              Setia</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_penerbitan_sumpah_janji" type="date" name="tgl_penerbitan_sumpah_janji"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_penerbitan_sumpah_janji') }}" />
              <small class="tgl_penerbitan_sumpah_janji_error text-danger" id="error-text"></small>
              @error('tgl_penerbitan_sumpah_janji')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Keputusan Menteri (Bidang
              Kewarganegaraan)</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_keputusan_menteri" type="text" name="nomor_keputusan_menteri"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('nomor_keputusan_menteri') }}" />
              <small class="nomor_keputusan_menteri_error text-danger" id="error-text"></small>
              @error('nomor_keputusan_menteri')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Keputusan Menteri</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_keputusan_menteri" type="date" name="tgl_keputusan_menteri"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_keputusan_menteri') }}" />
              <small class="tgl_keputusan_menteri_error text-danger" id="error-text"></small>
              @error('tgl_keputusan_menteri')
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
