<!DOCTYPE html>
<html>

<head>
    <title>Konfirmasi Pendaftaran</title>
</head>

<body>
    <p><b>Kepada Yth Calon Mahasiswa di Tempat,</b></p>
    <p>Terima kasih Anda telah melakukan Pendaftaran Online di situs kami dengan data berikut:</p>
    <p>Nomor Pendaftaran: <b>{{ $data['no_daftar'] }}</b><br>
        Perguruan Tinggi: <b>Universitas Mitra Bangsa</b><br>
        Jurusan: {{ $data['jurusan'] }}<br>
        Wawancara Via: Telepon (di {{ $data['no_wa'] }})</p>

    <p><b><u>DATA PRIBADI</u></b></p>
    <ul>
        <li>Nama: {{ $data['nama_leng'] }}</li>
        <li>Jenis Kelamin: {{ $data['jk'] }}</li>
        <li>Tempat Lahir: {{ $data['tmpt_lahir'] }}</li>
        <li>Tanggal Lahir: {{ $data['tgl_lahir'] }}</li>
        <li>Email: {{ $data['email'] }}</li>
        <li>No HP/WA: {{ $data['no_hp'] }}</li>
    </ul>
    <p>Setelah melakukan pembayaran, konfirmasi dapat dilakukan melalui WA ke: <a
            href="https://api.whatsapp.com/send?phone=6287890198284&text=Halo%20Admin%20Saya%20Sudah%20Daftar%20Online%20di%20UPY.">6287890198284</a>.
    </p>
</body>

</html>
