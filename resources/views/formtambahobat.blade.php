<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Tambah Obat</title>
</head>
<body>
    <form method="POST" action="/tambahobat">
    {{ csrf_field() }}
        <p>Masukkan Nama Obat Beserta Jadwal Konsumsi untuk Lansia dibawah ini<br>
        <input type="text" name="username_lan" value="{{$lansia}}" readonly><br>
        <input type="text" name="namaobat" placeholder="Nama Obat"><br>
        <input type="text" name="jadwal" placeholder="Jadwal"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>