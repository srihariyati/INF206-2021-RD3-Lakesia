<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Tambah Riwayat</title>
</head>
<body>
   <!--tambahkan layout-->
    <form method='POST' action="/tambahriwayat">
    {{ csrf_field() }}
    <label>Masukkan Data Hasil Pemeriksaan</label><br><br>
    <label>Nama Lansia</label><br>
    <input type="text" name="username_lan" readonly value="{{$lansia}}" required><br>
    <input type="text" name="nama_per" placeholder="nama pemeriksa" required><br>
    <input type="date" name="tgl" placeholder="Tanggal Pemeriksaan" required><br>
    <input type="text" name="gula" placeholder="Gula Darah"required><br>
    <input type="text" name="tekanandarah" placeholder="Tekanan Darah" required><br>
    <input type="text" name="asamurat" placeholder="Asam Urat"required><br>
    <input type="text" name="kolesterol" placeholder="Kolesterol"required><br>
    <button type="submit">Simpan</button>
    </form>

</body>
</html>