<div class="row">
    <div class="col-sm-12">
        <h3 class="page-title">Data Berkas</h3>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($berkasID)) { ?>
                            kosong
                        <?php } elseif (!empty($berkasID))
                            foreach ($berkasID as $key => $value) { ?>
                            <tr>
                                <td><?= $value['judul_dokumen']; ?></td>
                            </tr>
        
                        <?php } ?>
                    </tbody>
        
                </table>
            </div>
        </div>
    </div>
</div>