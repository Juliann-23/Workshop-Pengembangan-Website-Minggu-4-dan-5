<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        h2 { color: #333; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Daftar Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->prodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
