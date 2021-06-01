<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Check Up Sekarang</title>

    <!--css here-->
    <link rel="stylesheet" href="/css/CheckUpSekarang/LansiaStyle.css">
    <link rel="stylesheet" href="/css/CheckUpSekarang/CheckupStyle.css">
    <link rel="stylesheet" href="/css/CheckUpSekarang/TableStyle.css">

    <!-- js here-->
    <script src="\js\CheckUpSekarang.js"></script>
</head>
<body>   
    <div>
        <img class="Lakesia-Logo" src="/img/Logo.png" alt="Lakesia Logo"> </div>
        <div class='CheckUpSekarang-text'>Check Up Sekarang </div>
        <div class="tableperawat-tersedia-text">Perawat yang tersedia <br><br>
        <!--menampilkan daftar perawat yang tersedia-->
        <table  width="130%">
            <thead>
                <tr>
                    <td class="header">Nama Perawat</td>
                    <td class="header">Alamat</td>
                    <td class="header">Nomor Telepon</td>
                </tr>
            </thead>
            <tbody>
            @foreach($lansia as $l)
            @foreach($perawat as $per)
            
                <tr>
                <td >{{$per->nama_per}}</td>
                <td>{{$per->alamat_per}}</td>
                <td>{{$per->nohp_per}}</td>
                <td>
                    <button style="background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        border-radius: 12px;"
                        onclick="window.location.href='https://wa.me/{{$per->nohp_per}}?text=Saya%20{{$l->nama_lan}}%20ingin%20melakukan%20pemeriksaan%20kesehatan%20'"
                        >WhatsApp</button>
                </td>
                </tr>
            @endforeach
            </tbody>  
                
            </table>
    </div>
    <!-- menampilkan data lansia-->
    <div class="circle-profil"></div>
    <div> <img class="foto-profil" src="/img/Profile-Logo.png" alt="Foto profil"></div>
    <div> <a style=" font-size:15px;color:red; left: 1460px;top: 40px;" href="/">Logout</a></div>
    <div class="box-name">{{$l->nama_lan}}</div>
    <div class="box-profil-1">
                <ul>
                    <p class="data-profil">No.Id &emsp; &emsp; &emsp; &emsp; &emsp; :#{{$l->id_lan}}</p>
                    <p class="data-profil">Tanggal Lahir &emsp; &emsp; : {{$l->tgllahir_lan}}</p>
                    <p class="data-profil">Alamat &emsp; &emsp; &emsp; &emsp; &ensp;: {{$l->alamat_lan}}</p>
                    <!--<p class="data-profil">Umur &emsp; &emsp; &emsp; &emsp; &emsp; : 67 tahun</p>-->
                    <p class="data-profil">Agama &emsp; &emsp; &emsp; &emsp; &ensp;: {{$l->agama}}</p>
                    <p class="data-profil">Jenis Kelamin &emsp; &nbsp;&ensp;&ensp;: {{$l->jk_lan}}</p>

                    <!--nampilin dari data riwayat-->
                    <!--<p class="data-profil">Riwayat Penyakit &ensp;&ensp;: Ginjal</p>-->
                    <p class="data-profil">Golongan Darah &ensp; &ensp;: {{$l->goldar}}</p>
                    <p class="data-profil">Berat Badan &emsp; &emsp; &ensp; : {{$l->berat}}Kg</p>
                    <p class="data-profil">Berat Badan &emsp; &emsp; &ensp; : {{$l->tinggi}}Cm</p>
                  
                </ul>
        </div>
        <div class="box-profil-2">
            <div class="square-profil"></div>
            <div> <img class="square-profil" src="/img/Profile-Logo.png" alt="Foto Profil"> </div>
            <div class="nama-profil"><br/>{{$l->nama_lan}}</div>
            <!--<div class="usia-profil"></div>-->
        </div>          
        </div>
    <div class="box-cek-terakhir">
        <div class="cek-judul">Jadwal Check Up Terakhir</div>
        <div> <img class="date-logo" src="/img/date.png" alt="date"> </div>
        <div> <img class="clock-logo" src="/img/clock.png" alt=""> </div>
    </div>
    <div class="box-cek-berikut">
        <div class="cek-judul">Jadwal Check Up Berikutnya</div>
        <div> <img class="date-logo" src="/img/date.png" alt="date"> </div>
        <div> <img class="clock-logo" src="/img/clock.png" alt=""> </div>
   @endforeach
  

     <a onclick="goBack()" class="previous round">&#8592;</a>
    
    
</body>
</html>