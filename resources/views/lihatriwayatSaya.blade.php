<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakesia | Riwayat Saya</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <td>Tanggal Pemeriksaan</td>
            <td>Tekanan Darah</td>
            <td>Gula Darah</td>
            <td>Asam Urat</td>
            <td>Kolesterol</td>
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
</body>
</html>