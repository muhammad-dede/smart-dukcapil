 {{-- Data Anak --}}
 <div id="data-peristiwa-penting-lainnya">
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Akta Kelahiran</label>
         <div class="col-lg-8 fv-row">
             <input id="nomor_akta_kelahiran" type="text" name="nomor_akta_kelahiran"
                 class="form-control form-control-lg form-control-solid" placeholder=""
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
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin Baru</label>
         <div class="col-lg-8 fv-row">
             <div class="d-flex align-items-center mt-3">
                 <label class="form-check form-check-inline form-check-solid me-5">
                     <input id="jenis_kelamin_baru" class="form-check-input" name="jenis_kelamin_baru" type="radio"
                         value="L" />
                     <span class="fw-bold ps-2 fs-6">Laki-laki</span>
                 </label>
                 <label class="form-check form-check-inline form-check-solid">
                     <input id="jenis_kelamin_baru" class="form-check-input" name="jenis_kelamin_baru" type="radio"
                         value="P" />
                     <span class="fw-bold ps-2 fs-6">Perempuan</span>
                 </label>
             </div>
             <small class="jenis_kelamin_baru_error text-danger" id="error-text"></small>
             @error('jenis_kelamin_baru')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>
     <div class="row mb-5">
         <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin Lama</label>
         <div class="col-lg-8 fv-row">
             <div class="d-flex align-items-center mt-3">
                 <label class="form-check form-check-inline form-check-solid me-5">
                     <input id="jenis_kelamin_lama" class="form-check-input" name="jenis_kelamin_lama" type="radio"
                         value="L" />
                     <span class="fw-bold ps-2 fs-6">Laki-laki</span>
                 </label>
                 <label class="form-check form-check-inline form-check-solid">
                     <input id="jenis_kelamin_lama" class="form-check-input" name="jenis_kelamin_lama" type="radio"
                         value="P" />
                     <span class="fw-bold ps-2 fs-6">Perempuan</span>
                 </label>
             </div>
             <small class="jenis_kelamin_lama_error text-danger" id="error-text"></small>
             @error('jenis_kelamin_lama')
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
