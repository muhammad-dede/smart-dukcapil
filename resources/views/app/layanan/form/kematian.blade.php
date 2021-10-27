 {{-- Data Anak --}}
 <div id="data-kematian">
     <h2 class="mb-5 text-primary">Data Kematian</h2>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_kematian" type="text" name="nik_kematian"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408020202****"
                 value="{{ old('nik_kematian') }}" />
             <small class="nik_kematian_error text-danger" id="error-text"></small>
             @error('nik_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lengkap</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_kematian" type="text" name="nama_kematian"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                 value="{{ old('nama_kematian') }}" />
             <small class="nama_kematian_error text-danger" id="error-text"></small>
             @error('nama_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Kematian</label>
         <div class="col-lg-8 fv-row">
             <input id="tgl_kematian" type="date" name="tgl_kematian"
                 class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                 value="{{ old('tgl_kematian') }}" />
             <small class="tgl_kematian_error text-danger" id="error-text"></small>
             @error('tgl_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Waktu Kematian</span>
         </label>
         <div class="col-lg-8 fv-row">
             <input id="pukul_kematian" type="time" name="pukul_kematian"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 12:00"
                 value="{{ old('pukul_kematian') }}" />
             <small class="pukul_kematian_error text-danger" id="error-text"></small>
             @error('pukul_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Sebab Kematian</span>
         </label>
         <div class="col-lg-8 fv-row">
             <select id="sebab_kematian" name="sebab_kematian" aria-label="Pilih Sebab Kematian" data-control="select2"
                 data-placeholder="Pilih Sebab Kematian..."
                 class="form-select form-select-solid form-select-lg fw-bold">
                 <option value="">Pilih Sebab Kematian...</option>
                 @foreach (get_sebab_kematian() as $sebab_kematian)
                     <option value="{{ $sebab_kematian->kode }}">{{ $sebab_kematian->nama }}
                     </option>
                 @endforeach
             </select>
             <small class="sebab_kematian_error text-danger" id="error-text"></small>
             @error('sebab_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Tempat Kematian</span>
         </label>
         <div class="col-lg-8 fv-row">
             <input id="tempat_kematian" type="text" name="tempat_kematian"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: Cilegon"
                 value="{{ old('tempat_kematian') }}" />
             <small class="tempat_kematian_error text-danger" id="error-text"></small>
             @error('tempat_kematian')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Yang Menerangkan</span>
         </label>
         <div class="col-lg-8 fv-row">
             <select id="menerangkan_kematian" name="menerangkan_kematian" aria-label="Pilih Yang Menerangkan"
                 data-control="select2" data-placeholder="Pilih Yang Menerangkan..."
                 class="form-select form-select-solid form-select-lg fw-bold">
                 <option value="">Pilih Yang Menerangkan...</option>
                 @foreach (get_tenaga_ahli() as $menerangkan_kematian)
                     <option value="{{ $menerangkan_kematian->kode }}">
                         {{ $menerangkan_kematian->nama }}
                     </option>
                 @endforeach
             </select>
             <small class="menerangkan_kematian_error text-danger" id="error-text"></small>
             @error('menerangkan_kematian')
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
 {{-- Data Ortu --}}
 <div id="data-ortu">
     <h2 class="mb-5 text-primary">Data Orang Tua</h2>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_ayah" type="text" name="nama_ayah" class="form-control form-control-lg form-control-solid"
                 placeholder="Contoh: Abdi Rizky" value="{{ old('nama_ayah') }}" />
             <small class="nama_ayah_error text-danger" id="error-text"></small>
             @error('nama_ayah')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_ayah" type="text" name="nik_ayah" class="form-control form-control-lg form-control-solid"
                 placeholder="Contoh: 360408121212****" value="{{ old('nik_ayah') }}" />
             <small class="nik_ayah_error text-danger" id="error-text"></small>
             @error('nik_ayah')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-6">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat, Tanggal
             Lahir Ayah</label>
         <div class="col-lg-8">
             <div class="row">
                 <div class="col-lg-8 fv-row">
                     <input id="tempat_lahir_ayah" type="text" name="tempat_lahir_ayah"
                         class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                         placeholder="Contoh: Cilegon" value="{{ old('tempat_lahir_ayah') }}" />
                     <small class="tempat_lahir_ayah_error text-danger" id="error-text"></small>
                     @error('tempat_lahir_ayah')
                         <span class="text-danger" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
                 <div class="col-lg-4 fv-row">
                     <input id="tgl_lahir_ayah" type="date" name="tgl_lahir_ayah"
                         class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                         placeholder="Contoh: 12-12-1990" value="{{ old('tgl_lahir_ayah') }}" />
                     <small class="tgl_lahir_ayah_error text-danger" id="error-text"></small>
                     @error('tgl_lahir_ayah')
                         <span class="text-danger" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
             </div>
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
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_ibu" type="text" name="nama_ibu" class="form-control form-control-lg form-control-solid"
                 placeholder="Contoh: Fitria" value="{{ old('nama_ibu') }}" />
             <small class="nama_ibu_error text-danger" id="error-text"></small>
             @error('nama_ibu')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_ibu" type="text" name="nik_ibu" class="form-control form-control-lg form-control-solid"
                 placeholder="Contoh: 360408020202****" value="{{ old('nik_ibu') }}" />
             <small class="nik_ibu_error text-danger" id="error-text"></small>
             @error('nik_ibu')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-6">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat, Tanggal
             Lahir Ibu</label>
         <div class="col-lg-8">
             <div class="row">
                 <div class="col-lg-8 fv-row">
                     <input id="tempat_lahir_ibu" type="text" name="tempat_lahir_ibu"
                         class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                         placeholder="Contoh: Cilegon" value="{{ old('tempat_lahir_ibu') }}" />
                     <small class="tempat_lahir_ibu_error text-danger" id="error-text"></small>
                     @error('tempat_lahir_ibu')
                         <span class="text-danger" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
                 <div class="col-lg-4 fv-row">
                     <input id="tgl_lahir_ibu" type="date" name="tgl_lahir_ibu"
                         class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                         placeholder="Contoh: 12-12-1990" value="{{ old('tgl_lahir_ibu') }}" />
                     <small class="tgl_lahir_ibu_error text-danger" id="error-text"></small>
                     @error('tgl_lahir_ibu')
                         <span class="text-danger" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
             </div>
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
 </div>
 <div class="py-4 text-muted">
     <hr>
 </div>
 {{-- Data Saksi --}}
 <div id="data-saksi">
     <h2 class="mb-5 text-primary">Data Saksi</h2>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Saksi I</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_saksi_1" type="text" name="nama_saksi_1"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: Abdi Rizky"
                 value="{{ old('nama_saksi_1') }}" />
             <small class="nama_saksi_1_error text-danger" id="error-text"></small>
             @error('nama_saksi_1')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Saksi I</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_saksi_1" type="text" name="nik_saksi_1"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                 value="{{ old('nik_saksi_1') }}" />
             <small class="nik_saksi_1_error text-danger" id="error-text"></small>
             @error('nik_saksi_1')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">No KK Saksi I</label>
         <div class="col-lg-8 fv-row">
             <input id="no_kk_saksi_1" type="text" name="no_kk_saksi_1"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                 value="{{ old('no_kk_saksi_1') }}" />
             <small class="no_kk_saksi_1_error text-danger" id="error-text"></small>
             @error('no_kk_saksi_1')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-6">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Kewarganegaraan Saksi I</span>
         </label>
         <div class="col-lg-8 fv-row">
             <select id="kewarganegaraan_saksi_1" name="kewarganegaraan_saksi_1" aria-label="Pilih Kewarganegaraan"
                 data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                 class="form-select form-select-solid form-select-lg fw-bold">
                 <option value="">Pilih Kewarganegaraan...</option>
                 @foreach (get_negara() as $negara)
                     <option value="{{ $negara->kode }}">{{ $negara->nama }}
                     </option>
                 @endforeach
             </select>
             <small class="kewarganegaraan_saksi_1_error text-danger" id="error-text"></small>
             @error('kewarganegaraan_saksi_1')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Saksi II</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_saksi_2" type="text" name="nama_saksi_2"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: Abdi Rizky"
                 value="{{ old('nama_saksi_2') }}" />
             <small class="nama_saksi_2_error text-danger" id="error-text"></small>
             @error('nama_saksi_2')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Saksi II</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_saksi_2" type="text" name="nik_saksi_2"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                 value="{{ old('nik_saksi_2') }}" />
             <small class="nik_saksi_2_error text-danger" id="error-text"></small>
             @error('nik_saksi_2')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">No KK Saksi II</label>
         <div class="col-lg-8 fv-row">
             <input id="no_kk_saksi_2" type="text" name="no_kk_saksi_2"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: 360408121212****"
                 value="{{ old('no_kk_saksi_2') }}" />
             <small class="no_kk_saksi_2_error text-danger" id="error-text"></small>
             @error('no_kk_saksi_2')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-6">
         <label class="col-lg-4 col-form-label fw-bold fs-6">
             <span class="required">Kewarganegaraan Saksi II</span>
         </label>
         <div class="col-lg-8 fv-row">
             <select id="kewarganegaraan_saksi_2" name="kewarganegaraan_saksi_2" aria-label="Pilih Kewarganegaraan"
                 data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                 class="form-select form-select-solid form-select-lg fw-bold">
                 <option value="">Pilih Kewarganegaraan...</option>
                 @foreach (get_negara() as $negara)
                     <option value="{{ $negara->kode }}">{{ $negara->nama }}
                     </option>
                 @endforeach
             </select>
             <small class="kewarganegaraan_saksi_2_error text-danger" id="error-text"></small>
             @error('kewarganegaraan_saksi_2')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
 </div>
