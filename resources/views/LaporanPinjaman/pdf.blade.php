<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pinjaman</title>
</head>
<body>
    <h1>Laporan Pinjaman</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Detail Perjanjian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporan)
                <tr>
                    <td>{{ $laporan->id ?? 'N/A' }}</td>
                    <td>{{ $laporan->pinjaman_id ?? 'N/A' }}</td>
                    <td>{{ $laporan->detail_perjanjian ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
