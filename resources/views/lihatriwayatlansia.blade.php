<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA |Lihat Riwayat Pasien</title>
</head>
<body>
    <table>
       
        <thead>
            <tr>
                <td>Tanggal</td>
                <td>Username Lansia</td>
                <td>Tekanan Darah</td>
                <td>Gula Darah</td>
                <td>Asam Urat</td>
                <td>Kolesterol</td>
                <td>Nama Pemeriksa</td>
            </tr>
          
        </thead>

        <tbody>
        @foreach($riwayat as $ri)
            <tr>
                <td>{{$ri->tanggal}}</td>
                <td>{{$ri->username_lan}}</td>
                <td>{{$ri->tekanandarah}}</td>
                <td>{{$ri->guladarah}}</td>
                <td>{{$ri->asamurat}}</td>
                <td>{{$ri->kolesterol}}</td>
                <td>{{$ri->nama_pemeriksa}}</td>
            </tr>
        </tbody>
        @endforeach
    <table>
</body>
</html>