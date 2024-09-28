<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA RIWAYAT KEUANGAN</title>
    <link rel="stylesheet" href="style/output.css">
</head>
<body>
    <h1>RIWAYAT KEUANGAN</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pemakaian</th>
                <th>Budget</th>
                <th>Waktu</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($historis as $histori)
            <tr>
                <td>{{ $histori->id }}</td>
                <td>{{ $histori->pemakaian }}</td>
                <td>{{ $histori->budget }}</td>
                <td>{{ $histori->waktu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/">Kembali</a>
    <script src="script/output.js"></script>
</body>
</html>
