<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Lihat Obat Pasien</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <td>Usename Lansia</td>
            <td>Nama Obat</td>
            <td>Jadwal Konsumsi</td>
        </tr>
        </thead>
        <tbody>
        @foreach($obat as $o)
            <tr>
            <td>{{$o->username_lan}}</td>
            <td>{{$o->nama_obat}}</td>
            <td>{{$o->jadwal}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>