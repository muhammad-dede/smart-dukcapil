  {{-- Data Anak --}}
  <div id="data-pengakuan-anak">
      {{-- <h2 class="mb-5 text-primary">Data Anak</h2> --}}
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Akta Kelahiran</label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_akta_kelahiran" type="text" name="nomor_akta_kelahiran"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
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
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Penerbitan Akta
              Lahir</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_penerbitan_akta_kelahiran" type="date" name="tgl_penerbitan_akta_kelahiran"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_penerbitan_akta_kelahiran') }}" />
              <small class="tgl_penerbitan_akta_kelahiran_error text-danger" id="error-text"></small>
              @error('tgl_penerbitan_akta_kelahiran')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Dinas yang Menerbitkan Akta
              Lahir</label>
          <div class="col-lg-8 fv-row">
              <input id="dinas_yang_menerbitkan_akta_kelahiran" type="text" name="dinas_yang_menerbitkan_akta_kelahiran"
                  class="form-control form-control-lg form-control-solid"
                  placeholder="Contoh: Dinas Dukcapil Kota Cilegon"
                  value="{{ old('dinas_yang_menerbitkan_akta_kelahiran') }}" />
              <small class="dinas_yang_menerbitkan_akta_kelahiran_error text-danger" id="error-text"></small>
              @error('dinas_yang_menerbitkan_akta_kelahiran')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Kelahiran Anak</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_kelahiran_anak" type="date" name="tgl_kelahiran_anak"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_kelahiran_anak') }}" />
              <small class="tgl_kelahiran_anak_error text-danger" id="error-text"></small>
              @error('tgl_kelahiran_anak')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Perkawinan Agama</label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_perkawinan_agama" type="date" name="tgl_perkawinan_agama"
                  class="form-control form-control-lg form-control-solid" placeholder=""
                  value="{{ old('tgl_perkawinan_agama') }}" />
              <small class="tgl_perkawinan_agama_error text-danger" id="error-text"></small>
              @error('tgl_perkawinan_agama')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu Kandung</label>
          <div class="col-lg-8 fv-row">
              <input id="nama_ibu_kandung" type="text" name="nama_ibu_kandung"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: Lilis"
                  value="{{ old('nama_ibu_kandung') }}" />
              <small class="nama_ibu_kandung_error text-danger" id="error-text"></small>
              @error('nama_ibu_kandung')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu Kandung</label>
          <div class="col-lg-8 fv-row">
              <input id="nik_ibu_kandung" type="text" name="nik_ibu_kandung"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxx"
                  value="{{ old('nik_ibu_kandung') }}" />
              <small class="nik_ibu_kandung_error text-danger" id="error-text"></small>
              @error('nik_ibu_kandung')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-6">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Kewarganegaraan Ibu</span>
          </label>
          <div class="col-lg-8 fv-row">
              <select id="kewarganegaraan_ibu" name="kewarganegaraan_ibu" aria-label="Pilih Kewarganegaraan"
                  data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                  class="form-select form-select-solid form-select-lg fw-bold">
                  <option value="">Pilih Kewarganegaraan...</option>
                  @foreach (get_negara() as $negara)
                      <option value="{{ $negara->kode }}">{{ $negara->nama }}
                      </option>
                  @endforeach
              </select>
              <small class="kewarganegaraan_ibu_error text-danger" id="error-text"></small>
              @error('kewarganegaraan_ibu')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah Kandung</label>
          <div class="col-lg-8 fv-row">
              <input id="nama_ayah_kandung" type="text" name="nama_ayah_kandung"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                  value="{{ old('nama_ayah_kandung') }}" />
              <small class="nama_ayah_kandung_error text-danger" id="error-text"></small>
              @error('nama_ayah_kandung')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah Kandung</label>
          <div class="col-lg-8 fv-row">
              <input id="nik_ayah_kandung" type="text" name="nik_ayah_kandung"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxx"
                  value="{{ old('nik_ayah_kandung') }}" />
              <small class="nik_ayah_kandung_error text-danger" id="error-text"></small>
              @error('nik_ayah_kandung')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-6">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Kewarganegaraan Ayah</span>
          </label>
          <div class="col-lg-8 fv-row">
              <select id="kewarganegaraan_ayah" name="kewarganegaraan_ayah" aria-label="Pilih Kewarganegaraan"
                  data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                  class="form-select form-select-solid form-select-lg fw-bold">
                  <option value="">Pilih Kewarganegaraan...</option>
                  @foreach (get_negara() as $negara)
                      <option value="{{ $negara->kode }}">{{ $negara->nama }}
                      </option>
                  @endforeach
              </select>
              <small class="kewarganegaraan_ayah_error text-danger" id="error-text"></small>
              @error('kewarganegaraan_ayah')
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
