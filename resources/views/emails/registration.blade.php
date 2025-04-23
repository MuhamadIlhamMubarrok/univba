<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <style>
        body,
        p,
        li,
        b,
        u {
            color: black !important;
        }

        /* Gaya untuk hyperlink */
        a {
            color: black !important;
            text-decoration: none;
            /* Hapus garis bawah jika tidak diperlukan */
        }

        a:visited {
            color: black !important;
            /* Warna hitam untuk link yang sudah dikunjungi */
        }

        a:hover {
            color: black !important;
            /* Warna hitam saat link di-hover */
        }
    </style>
</head>

<body>
    <p><b>Kepada Yth Calon Mahasiswa di Tempat,</b></p>
    <p>Terima kasih Anda telah melakukan Pendaftaran Online di situs kami dengan data berikut:</p>
    <p>Konfirmasi akan dilaksanakan setelah Anda membayar biaya pendaftaran:</p>

    <ul>
        <li>Biaya Pendaftaran S1 : Rp. 150.000</li>
    </ul>

    <p>Atau melalui transfer biaya pendaftaran ke salah satu rekening:</p>
    <ul>
        <li>Bank BNI No Rekening:<br> 8282823886 a.n. Edukasi Indonesia Jaya</li>
    </ul>

    <p style="color: black; font-family: Arial, sans-serif;">
        Nomor Pendaftaran: <b>{{ $data['no_daftar'] }}</b><br>
        Perguruan Tinggi: <b>Universitas Banten</b><br>
        Jurusan: <b>{{ $data['jurusan'] }}</b><br>
        Wawancara Via: Telepon (di <b>{{ $data['no_wa'] }}</b>)
    </p>

    <p><b><u>DATA PRIBADI</u></b></p>
    <ul>
        <li>Nama: <b>{{ $data['nama_leng'] }}</b></li>
        <li>Jenis Kelamin: <b>{{ $data['jk'] }}</b></li>
        <li>Tempat Lahir: <b>{{ $data['tmpt_lahir'] }}</b></li>
        <li>Tanggal Lahir: <b>{{ $data['tgl_lahir'] }}</b></li>
        <li>Email: <b>{{ $data['email'] }}</b></li>
        <li>No HP/WA: <b>{{ $data['no_hp'] }}</b></li>
    </ul>

    <p>Setelah melakukan pembayaran, konfirmasi dapat dilakukan melalui WA ke:
        <a
            href="https://api.whatsapp.com/send?phone=6287890198284&text=Halo%20Admin%20Saya%20Sudah%20Daftar%20Online%20di%20Universitas Banten.">
            6287890198284
        </a>.
    </p>
</body>

</html>
