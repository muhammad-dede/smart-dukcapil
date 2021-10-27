  {{-- Data Anak --}}
  <div id="data-pelapor-pencatatan-sipil-dari-luar-wilayah-nkri">
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Jenis Peristiwa Penting</span>
          </label>
          <div class="col-lg-8 fv-row">
              <select id="jenis_peristiwa_penting" name="jenis_peristiwa_penting" aria-label="Pilih Peristiwa Penting"
                  data-control="select2" data-placeholder="Pilih Peristiwa Penting..."
                  class="form-select form-select-solid form-select-lg fw-bold">
                  <option value="">Pilih Jenis Kelahiran...</option>
                  @foreach (get_peristiwa_penting() as $peristiwa_penting)
                      <option value="{{ $peristiwa_penting->kode }}">{{ $peristiwa_penting->nama }}
                      </option>
                  @endforeach
              </select>
              <small class="jenis_peristiwa_penting_error text-danger" id="error-text"></small>
              @error('jenis_peristiwa_penting')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari
                  Perwakilan RI</span>
          </label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_surat_keterangan_pelaporan_perwakilan_ri" type="text"
                  name="nomor_surat_keterangan_pelaporan_perwakilan_ri"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                  value="{{ old('nomor_surat_keterangan_pelaporan_perwakilan_ri') }}" />
              <small class="nomor_surat_keterangan_pelaporan_perwakilan_ri_error text-danger" id="error-text"></small>
              @error('nomor_surat_keterangan_pelaporan_perwakilan_ri')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari
                  Perwakilan RI</span>
          </label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_surat_keterangan_pelaporan_perwakilan_ri" type="date"
                  name="tgl_surat_keterangan_pelaporan_perwakilan_ri"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                  value="{{ old('tgl_surat_keterangan_pelaporan_perwakilan_ri') }}" />
              <small class="tgl_surat_keterangan_pelaporan_perwakilan_ri_error text-danger" id="error-text"></small>
              @error('tgl_surat_keterangan_pelaporan_perwakilan_ri')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Kantor Perwakilan yang Melakukan Pencatatan</span>
          </label>
          <div class="col-lg-8 fv-row">
              <input id="kantor_perwakilan_yang_melakukan_pencatatan" type="text"
                  name="kantor_perwakilan_yang_melakukan_pencatatan"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: Imigrasi Kota Cilegon"
                  value="{{ old('kantor_perwakilan_yang_melakukan_pencatatan') }}" />
              <small class="kantor_perwakilan_yang_melakukan_pencatatan_error text-danger" id="error-text"></small>
              @error('kantor_perwakilan_yang_melakukan_pencatatan')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Nomor Bukti Pencatatan Sipil dari Negara
                  setempat</span>
          </label>
          <div class="col-lg-8 fv-row">
              <input id="nomor_bukti_pencatatan_sipil_dari_negara_setempat" type="text"
                  name="nomor_bukti_pencatatan_sipil_dari_negara_setempat"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                  value="{{ old('nomor_bukti_pencatatan_sipil_dari_negara_setempat') }}" />
              <small class="nomor_bukti_pencatatan_sipil_dari_negara_setempat_error text-danger"
                  id="error-text"></small>
              @error('nomor_bukti_pencatatan_sipil_dari_negara_setempat')
                  <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="row mb-5">
          <label class="col-lg-4 col-form-label fw-bold fs-6">
              <span class="required">Tanggal Penerbitan dari Negara Setempat</span>
          </label>
          <div class="col-lg-8 fv-row">
              <input id="tgl_penerbitan_dari_negara_setempat" type="date" name="tgl_penerbitan_dari_negara_setempat"
                  class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                  value="{{ old('tgl_penerbitan_dari_negara_setempat') }}" />
              <small class="tgl_penerbitan_dari_negara_setempat_error text-danger" id="error-text"></small>
              @error('tgl_penerbitan_dari_negara_setempat')
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
