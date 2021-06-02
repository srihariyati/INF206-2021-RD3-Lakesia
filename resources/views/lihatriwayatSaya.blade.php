<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lakesia | Riwayat Saya</title>

        <link rel="stylesheet" href="/css/RiwayatCheckUpLansia/RiwayatCheckUpLansiaStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
    <div class="container align-items-center justify-content-center">
            <br><br>
            <h1 class="mb-5">Riwayat Pemeriksaan Saya</h1>
    <!--tambahkan layout-->
        
        <table id="t01" class="tabel-riwayat">
            <thead>
            <h3>Tabel Riwayat</h3>
            <tr>
                <th>Tanggal Pemeriksaan</th>
                <th>Tekanan Darah</th>
                <th>Gula Darah</th>
                <th>Asam Urat</th>
                <th>Kolesterol</th>
            </tr>
            </thead>
            <tbody>
                @foreach($lansia as $lan)
            <tr>
                <td>{{$lan->tanggal}}</td>
                <td>{{$lan->tekanandarah}}</td>
                <td>{{$lan->guladarah}}</td>
                <td>{{$lan->asamurat}}</td>
                <td>{{$lan->kolesterol}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <a onclick="history.back()" class="previous">&#8592;</a>
    </body>
</html>