<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pinjaman</title>
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
    <h1>Daftar Laporan Pinjaman</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Detail Perjanjian</th> <!-- Make sure this matches the table field -->
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>{{ $laporan->pinjaman_id }}</td>
                    <td>{{ $laporan->detail_perjanjian }}</td> <!-- Correct field name -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>