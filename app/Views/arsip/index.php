<div class="row">
    <div class="col-sm-12">
        <div class="card shadow">
            <div class="card-body">
                Unit Kerja : <?= $unit = $data_user['nama_es2'] != NULL ? $data_user['nama_es2'] : $data_user['parameter_unit']; ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title"><?= $judul; ?></h5>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('arsip/tambah'); ?>" class="btn-right btn btn-sm btn-outline-primary">
                            Tambah Data
                        </a>
                        <a href="invoices.html" class="btn-right btn btn-sm btn-outline-success">
                            Import Data
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped text-sm" id="tb_arsip">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th hidden>ID</th>
                                <th>Unit</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Tgl Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>