<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Umum Pengawasan Internal</div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Unit</th>
                            <th>Tahun Audit</th>
                            <th>Jml Surat Masuk</th>
                            <th>Jml Surat Keluar</th>
                            <th>Jml Arsiparis</th>
                            <th>Jml Pengelola Arsip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        if ($IdDtUmum != NULL) { ?>
                            <?php foreach ($IdDtUmum as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_es2']; ?></td>
                                    <td><?= $value['tahun_audit']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="8">tidak ada data silakan klik <a href="<?= base_url('pengawasan/dataUmum/add'); ?>">Tambah Data</a> </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>