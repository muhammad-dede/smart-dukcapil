 {{-- Data Anak --}}
 <div id="data-pembatalan-akta">
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Akta yang dibatalkan</label>
         <div class="col-lg-8 fv-row">
             <input id="akta_yang_dibatalkan" type="text" name="akta_yang_dibatalkan"
                 class="form-control form-control-lg form-control-solid" placeholder=""
                 value="{{ old('akta_yang_dibatalkan') }}" />
             <small class="akta_yang_dibatalkan_error text-danger" id="error-text"></small>
             @error('akta_yang_dibatalkan')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">No Akta Yang dibatalkan</label>
         <div class="col-lg-8 fv-row">
             <input id="nomor_akta_yang_dibatalkan" type="text" name="nomor_akta_yang_dibatalkan"
                 class="form-control form-control-lg form-control-solid" placeholder=""
                 value="{{ old('nomor_akta_yang_dibatalkan') }}" />
             <small class="nomor_akta_yang_dibatalkan_error text-danger" id="error-text"></small>
             @error('nomor_akta_yang_dibatalkan')
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
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Putusan Pengadilan</label>
         <div class="col-lg-8 fv-row">
             <input id="nomor_putusan_pengadilan" type="text" name="nomor_putusan_pengadilan"
                 class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                 value="{{ old('nomor_putusan_pengadilan') }}" />
             <small class="nomor_putusan_pengadilan_error text-danger" id="error-text"></small>
             @error('nomor_putusan_pengadilan')
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


 </div>
 <div class="py-4 text-muted">
     <hr>
 </div>
