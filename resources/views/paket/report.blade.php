<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Syahira Paket</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/date-1.1.1/kt-2.6.4/sp-1.4.0/datatables.min.css"/>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/b-print-2.1.1/date-1.1.1/kt-2.6.4/sp-1.4.0/datatables.min.js"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body class="container">
    <h1 class="mt-4 mb-4"> Report Data Pelanggan</h2>
        <table id="data_users_reguler" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No-Paket</th>
                    <th>Nama Paket</th>
                    <th>Harga Paket</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pakets as $paket)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paket->no_paket }}</td>
                        <td>{{ $paket->nama_paket }}</td>
                        <td>{{ $paket->harga_paket}}</td>
                        <td>{{ $paket->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <script>
    $(document).ready(function() {
    $('#data_users_reguler').DataTable({
        dom: 'lBfrtip',
        buttons: [
        'copy', 'excel', 'pdf', 'print'
        ]
    });
} );
</script>
</body>
</html>

