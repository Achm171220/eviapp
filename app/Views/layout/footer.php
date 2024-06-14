</div>
</div>

</div>
</div>


<script src="<?= base_url(); ?>/assets/assets/js/jquery-3.6.0.min.js"></script>

<script src="<?= base_url(); ?>/assets/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>/assets/assets/js/feather.min.js"></script>

<script src="<?= base_url(); ?>/assets/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?= base_url(); ?>/assets/assets/plugins/select2/js/select2.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets/plugins/select2/js/custom-select.js"></script>

<script src="<?= base_url(); ?>/assets/assets/js/script.js"></script>

<script src="<?= base_url(); ?>/assets/assets/plugins/datatables/datatables.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>/assets/assets/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $('#tb_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '<?= base_url() ?>/user/json'
        },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            }
        ],
        columnDefs: [{
            "targets": 3,
            "render": function(data, type, row, meta) {
                return `<a class="btn btn-sm btn-warning" href="<?= base_url('user/edit'); ?>/${row.id}">Edit</a> | <a class="btn btn-sm btn-danger" href="#${row.id}" onclick="alert('Delete data id=${row.id}')">Hapus</a>`;
            }
        }]
    });
</script>
<script type="text/javascript">
    $('#tb_arsip').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '<?= base_url() ?>/arsip/json'
        },
        columns: [{
                data: 'no',
                render: function(data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'id',
                visible: false
            },
            {
                data: 'sub_bidang',
            },
            {
                data: 'kode_klas',
            },
            {
                data: 'judul_dokumen',
            },
            {
                data: 'tgl_dokumen',
            },
        ],
        columnDefs: [{
            "targets": 6,
            "render": function(data, type, row, meta) {
                return `<a class="btn btn-sm btn-warning" href="<?= base_url('arsip/edit'); ?>/${row.id}">Edit</a> | <a class="btn btn-sm btn-danger" href="#${row.id}" onclick="alert('Delete data id=${row.id}')">Hapus</a>`;
            }
        }]
    });
</script>
<script>
    $(document).ready(function() {
        // Mengatur status input1 dan input2 berdasarkan nilai select
        $("#media").change(function() {
            var selectedOption = $(this).val();
            if (selectedOption === "elektronik") {
                $("#simpan").prop("disabled", false);
                $("#simpan2").prop("disabled", false);
                $("#simpan3").prop("disabled", false);
                $("#boks").prop("disabled", true).val(""); // Menonaktifkan input2 dan mengosongkan nilainya
            } else {
                $("#simpan").prop("disabled", true).val(""); // Menonaktifkan input1 dan mengosongkan nilainya
                $("#simpan2").prop("disabled", true).val(""); // Menonaktifkan input1 dan mengosongkan nilainya
                $("#simpan3").prop("disabled", true).val(""); // Menonaktifkan input1 dan mengosongkan nilainya
                $("#boks").prop("disabled", false);
            }
        });

        // Memanggil fungsi toggleInputs() saat halaman dimuat
        $("#media").trigger("change");
    });
</script>
<script>
    $(document).ready(function() {
        $('#dateInput').on('change', function() {
            // Ambil nilai dari input date
            let dateValue = $(this).val();

            if (dateValue) {
                // Ambil tahun dari nilai date
                let year = new Date(dateValue).getFullYear();

                // Masukkan tahun ke input lainnya
                $('#yearInput').val(year);
            } else {
                // Kosongkan input year jika date tidak dipilih
                $('#yearInput').val('');
            }
        });
    });
</script>
<script>
    feather.replace();
</script>
</body>

</html>