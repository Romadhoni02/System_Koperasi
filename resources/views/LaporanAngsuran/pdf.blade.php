<!DOCTYPE html>
<html>
<head>
    <title>Laporan Angsuran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Laporan Angsuran</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Angsuran ID</th>
                <th>Detail Laporan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporan)
            <tr>
                <td>{{ $laporan->id }}</td>
                <td>{{ $laporan->angsuran_id }}</td>
                <td>{{ $laporan->detail_laporan }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</body>
</html>