 <div class="row">
     <div class="col-md-12">

         <div class="card">
             <div class="card-header">
                 <h5 class="card-title">Tambah Data</h5>
             </div>
             <?php echo form_open('arsip/store'); ?>
             <div class="card-body">
                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Unit Pencipta</label>
                     <div class="col-md-4">
                         <select class="js-example-basic-single select2" name="id_sub_bidang">
                             <option selected="selected" disabled>- Pilih -</option>
                             <?php foreach ($idSubBidang as $key => $subbid) { ?>
                                 <option value="<?= $subbid['id']; ?>"><?= $subbid['nama_sub_bidang']; ?></option>
                             <?php } ?>
                         </select>
                     </div>

                     <label class="col-form-label col-md-2">Kode Klasifikasi</label>
                     <div class="col-md-4">
                         <select class="js-example-basic-single select2" name="id_klasifikasi">
                             <option selected="selected" disabled>- Pilih -</option>
                             <?php foreach ($klasifikasi as $key => $klas) { ?>
                                 <option value="<?= $klas['id']; ?>"><?= $klas['kode_klasifikasi']; ?> - <?= $klas['nama_klasifikasi']; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Nomor Dokumen</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="no_dokumen" placeholder="isikan nomor arsip/dokumen">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Judul Dokumen</label>
                     <div class="col-md-10">
                         <textarea type="text" class="form-control" name="judul_dokumen" placeholder="Isikan Judul Dokumen"></textarea>
                     </div>
                 </div>
                 <div class="form-group row" id="tanggalform">
                     <label class="col-form-label col-md-2">Tanggal Dokumen</label>
                     <div class="col-md-6">
                         <input class="form-control" type="date" placeholder="17/12/2024" name="tgl_dokumen" id="dateInput">
                     </div>
                     <div class="col-md-4">
                         <input class="form-control" type="text" placeholder="tahun cipta" id="yearInput" name="tahun_cipta" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Jumlah Item</label>
                     <div class="col-md-4">
                         <input class="form-control" type="number" placeholder="isikan jumlah arsip" name="jumlah">
                     </div>
                     <label class="col-form-label col-md-2">Lokasi Simpan</label>
                     <div class="col-md-4">
                         <input class="form-control" type="text" placeholder="isikan lokasi simpan arsip" name="lokasi_simpan">
                     </div>
                 </div>

                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Status Aktif</label>
                     <div class="col-md-4">
                         <select class="form-control" name="status_arsip">
                             <option>-Pilih-</option>
                             <option value="aktif">Aktif</option>
                             <option value="inaktif">Inaktif</option>
                             <option value="vital">Vital</option>
                         </select>
                     </div>

                     <label class="col-form-label col-md-2">Jenis Arsip</label>
                     <div class="col-md-4">
                         <select class="form-control" name="jenis_arsip">
                             <option>-Pilih-</option>
                             <option value="regular">Regular</option>
                             <option value="vital">Vital</option>
                             <option value="terjaga">Terjaga</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label class="col-form-label col-md-2">Status TL</label>
                     <div class="col-md-4">
                         <select class="form-control" name="tl_temuan">
                             <option>-Pilih-</option>
                             <option value="0">Tidak TL</option>
                             <option value="1">Masih TL</option>
                             <option value="2">Belum diketahui</option>
                         </select>
                     </div>
                     <label class="col-form-label col-md-2">Dasar Catat</label>
                     <div class="col-md-4">
                         <select class="form-control" name="dasar_catat">
                             <option>-Pilih-</option>
                             <option value="daftar_arsip">Daftar Arsip</option>
                             <option value="sadwewa">Sadewa</option>
                             <option value="map">MAP</option>
                             <option value="srikandi">Srikandi</option>
                             <option value="bisma">Bisma</option>
                             <option value="agenda">Agenda</option>
                             <option value="inventarisir">Inventarisir</option>
                         </select>
                     </div>
                 </div>
                 <!-- jenis arsip jika elektronik maka boks disabled  -->
                 <div id="myForm">
                     <div class="form-group row">
                         <label class="col-form-label col-md-2">Media Simpan</label>
                         <div class="col-md-10">
                             <select class="form-control" name="media_simpan" id="media_simpan">
                                 <option>-Pilih-</option>
                                 <option value="kertas">Kertas</option>
                                 <option value="elektronik">Elektronik</option>
                                 <option value="lainnya">Lainnya</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div id="target">
                     <div class="form-group row">
                         <label class="col-form-label col-md-2">Tk P'kembangan</label>
                         <div class="col-md-4">
                             <select class="form-control" name="tk_perkembangan">
                                 <option>-Pilih-</option>
                                 <option value="asli">asli</option>
                                 <option value="kopi">kopi</option>
                                 <option value="konsep">konsep</option>
                                 <option value="lainnya">Lainnya</option>
                             </select>
                         </div>
                         <label class="col-form-label col-md-2">No Boks</label>
                         <div class="col-md-4">
                             <input class="form-control" type="text" placeholder="isikan nomor boks arsip" id="boks" name="no_box">
                         </div>
                     </div>

                     <!-- selesai  -->
                     <hr>
                     <p class="text-center">- Penyimpanan File Elektronik <span class="text-danger">(*)</span> -</p>

                     <div class="form-group mt-2">
                         <label>Nama File</label>
                         <input type="text" class="form-control" id="simpan" name="nama_file">
                     </div>
                     <div class="form-group mt-2">
                         <label>Nama Folder</label>
                         <input type="text" class="form-control" id="simpan2" name="nama_folder">
                     </div>
                     <div class="form-group mt-2">
                         <label>Nama Link</label>
                         <input type="url" class="form-control" id="simpan3" name="nama_link">
                     </div>
                 </div>
             </div>
             <div class="card-footer">
                 <a href="<?= base_url('arsip'); ?>" type="submit" class="btn btn-danger btn-sm">Kembali</a>
                 <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
             </div>
             <?php echo form_close() ?>
         </div>
     </div>
     <div class="col-md-6" hidden>
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title">Small Select2</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-12">
                         <p>Use data('select2') function to get container of select2.</p>
                         <select class="form-control form-small select">
                             <option selected="selected">orange</option>
                             <option>white</option>
                             <option>purple</option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title">Disabling options</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-12">
                         <p>Disable Select using disabled attribute.</p>
                         <select class="form-control disabled-results">
                             <option value="one">First</option>
                             <option value="two" disabled="disabled">Second</option>
                             <option value="three">Third</option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title">Limiting the number of Tagging</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-12">
                         <p>Set maximumSelectionLength: 2 with tags: true to limit selectin in Tag mode.</p>
                         <select class="form-control tagging" multiple="multiple">
                             <option>orange</option>
                             <option>white</option>
                             <option>purple</option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>