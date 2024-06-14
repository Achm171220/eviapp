<div class="row">
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-2">
                        <i class="fas fa-file"></i>
                    </span>
                    <div class="dash-count">
                        <div class="dash-title">Arsip Aktif</div>
                        <div class="dash-counts">
                            <p>
                                <?= $formattedNumber = number_format($jml, 0, ',', '.'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-5" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ARSIP INAKTIF  -->
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-1">
                        <i class="fas fa-archive"></i>
                    </span>
                    <div class="dash-count">
                        <div class="dash-title">Arsip Inaktif</div>
                        <div class="dash-counts">
                            <p><?= $formattedNumber = number_format($jml_i, 0, ',', '.'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-6" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ARSIP VITAL  -->
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-3">
                        <i class="fas fa-file-alt"></i>
                    </span>
                    <div class="dash-count">
                        <div class="dash-title">Arsip Vital</div>
                        <div class="dash-counts">
                            <p>0</p>
                        </div>
                    </div>
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-7" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Nilai Pengawasan Internal</h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <h6>REKAPITULASI NILAI ASKI</h6>
                    <h6>UNIT PENGOLAH</h6>
                    <h6>: <?= $unit = $data_user['nama_es2'] != NULL ? $data_user['nama_es2'] : $data_user['parameter_unit']; ?></h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th colspan="2">Aspek/Sub Aspek</th>
                                <th width="15%">Nilai Standar</th>
                                <th width="15%">Nilai Audit</th>
                                <th width="15%">Nilai Sub Aspek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($n_penciptaan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td width="4%">*</td>
                                    <td width="44%"><?= $value['sub_kategori']; ?></td>
                                    <td class="text-center"><?= round($value['nilai_standar'], 2); ?></td>
                                    <td class="text-center">
                                        <?= round($value['nilai'], 2); ?>
                                        <?php if ($value['nilai_standar'] > $value['nilai']) { ?>
                                            <button class="btn btn-default btn-sm btn-rounded">
                                                <i class="fa fa-arrow-down text-danger"></i>
                                            </button>
                                        <?php } else { ?>
                                            <button class="btn btn-default btn-sm btn-rounded">
                                                <i class="fa fa-check-circle text-primary"></i>
                                            </button>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center"><?= round($value['skor_aski'], 2); ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th class="bg-2" colspan="5">Nilai Hasil Pengawasan Kearsipan Internal</th>
                                <th>
                                    <h5>
                                        <?php
                                        if (isset($nilai_final['skor'])) {
                                            echo round($nilai_final['skor'], 2);
                                        } else {
                                            echo 'belum ada nilai';
                                        } ?>
                                    </h5>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <th bg="2" colspan="5">Kategori</th>
                                <th>
                                    <?php
                                    if (isset($nilai_final['skor'])) { ?>
                                        <?php
                                        $skor = $nilai_final['skor'];
                                        if ($skor > 90) { ?>
                                            <h5>AA (Sangat Memuaskan)</h5>
                                        <?php } elseif ($skor > 80 && $skor < 90) { ?>
                                            <h5>A (Memuaskan)</h5>
                                        <?php } ?>
                                    <?php } else { ?>
                                        belum ada nilai
                                    <?php } ?>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>