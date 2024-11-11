<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pendaftar</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Laporan Pendaftar</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Pilihan Kampus</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftars as $index => $daftar)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $daftar->nama_leng }}</td>
                    <td>{{ $daftar->email }}</td>
                    <td>{{ $daftar->no_hp }}</td>
                    <td>{{ $daftar->j_kel == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $daftar->kampus }}</td>
                    <td>{{ $daftar->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
