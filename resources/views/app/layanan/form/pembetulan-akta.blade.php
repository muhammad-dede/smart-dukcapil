 {{-- Data Anak --}}
 <div id="data-pembetulan-akta">
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">No Akta Yang akan dibetulkan</label>
         <div class="col-lg-8 fv-row">
             <input id="nomor_akta_yang_akan_dibetulkan" type="text" name="nomor_akta_yang_akan_dibetulkan"
                 class="form-control form-control-lg form-control-solid" placeholder=""
                 value="{{ old('nomor_akta_yang_akan_dibetulkan') }}" />
             <small class="nomor_akta_yang_akan_dibetulkan_error text-danger" id="error-text"></small>
             @error('nomor_akta_yang_akan_dibetulkan')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah / Ibu / Wali</label>
         <div class="col-lg-8 fv-row">
             <input id="nama_ayah_ibu_wali" type="text" name="nama_ayah_ibu_wali"
                 class="form-control form-control-lg form-control-solid" placeholder=""
                 value="{{ old('nama_ayah_ibu_wali') }}" />
             <small class="nama_ayah_ibu_wali_error text-danger" id="error-text"></small>
             @error('nama_ayah_ibu_wali')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah / Ibu / Wali</label>
         <div class="col-lg-8 fv-row">
             <input id="nik_ayah_ibu_wali" type="text" name="nik_ayah_ibu_wali"
                 class="form-control form-control-lg form-control-solid" placeholder=""
                 value="{{ old('nik_ayah_ibu_wali') }}" />
             <small class="nik_ayah_ibu_wali_error text-danger" id="error-text"></small>
             @error('nik_ayah_ibu_wali')
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
