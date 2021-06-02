<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAKESIA | Lihat Obat Pasien</title>

        <link rel="stylesheet" href="/css/LihatDaftarObat/LihatDaftarObatStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container align-items-center justify-content-center">
            <br><br>
            <h1 class="mb-5">Daftar Obat Pasien</h1>

            <table id="t01" class="tabel-riwayat">
            <thead>
            <h3>Tabel Obat</h3>
            <tr>
                <th>Usename Lansia</th>
                <th>Nama Obat</th>
                <th>Jadwal Konsumsi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($obat as $o)
                <tr>
                <td>{{$o->nama_lan}}</td>
                <td>{{$o->nama_obat}}</td>
                <td>{{$o->jadwal}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <a onclick="history.back()" class="previous">&#8592;</a>
    </body>
</html>