<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatables Server-side</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/plugin/datatables.min.css">
</head>

<body>
    <table id="matauang" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Mata Uang</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>

    <script src="<?= base_url(); ?>/plugin/datatables.min.js"></script>
    <script type="text/javascript">
        $('#matauang').DataTable({
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
                    return `<a href="<?= base_url('arsip'); ?>+${row.id}"><button>Edit</button></a> | <a href="#${row.id}" onclick="alert('Delete data id=${row.id}')"><button>Hapus</button></a>`;
                }
            }]
        });
    </script>
</body>

</html>