<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Perawat</title>

    <!-- css here-->
    <link rel="stylesheet" href="/css/Perawat/PerawatStyle.css">
    <link rel="stylesheet" href="/css\Perawat/CalendarStyle.css">
    <link rel="stylesheet" href="/css/Perawat/TableStyle.css">
</head>
<body>
 
<div> <img class="lakesia-logo" src="\img\Logo.png" alt="Lakesia Logo"> </div>
        <div class="row">

        
        <div class="menu-bar">
            <div class="menu-text">Menu</div>
            <div class="line"></div>
            <a href="/dasboard/perawat/lihatriwayatpasien" class= "button button-riwayat">Riwayat Pasien</a>
            <a href="/dasboard/perawat/daftarobat" class="button button-obat">Obat Pasien</a>
        </div>

            <!--
            <div class="column">
                <img class="Background-Menu" src="\img\Rectangle 309.png"/>
                <a href="/dasboard/perawat/lihatriwayatpasien" class= "Button Riwayat-Pasien">Riwayat Pasien</a>
                <a href="/dasboard/perawat/daftarobat" class="Button Obat-Pasien">Obat Pasien</a>
                <div class="Text-Menu">MENU</div>
            </div>

            -->
            <!--
            <div class= "column">
                <img class= "Background-grid2" src="\img\grid.png"/>
            </div>

            
            <div class= "column">
                <img class= "Background-grid3" src="\img\grid.png"/>
            </div>
            -->
          
            <!-- menampilkan data perawat disebelah kanan-->
        @foreach($perawat as $per)
        <div class="circle-profil"></div>
        <div> <img class="foto-profil" src="/img/Profile-Logo.png" alt="Foto profil"></div>
        <div> <a style="color:red; left: 1400px;top: 40px;" href="/">Logout</a></div>
        <div class="box-name">{{$per->nama_per}}</div>
        <div class="box-profil-1">

            <table class="data-diri">
                <tr>
                    <td class="judul-data-diri">No.Id</td>
                    <td>:</td>
                    <td>#{{$per->id}}</td>
                </tr>
                <tr>
                    <td class="judul-data-diri">No. Pegawai</td>
                    <td>:</td>
                    <td>{{$per->no_per}}</td>
                </tr>
                <tr>
                    <td class="judul-data-diri">Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$per->tgllahir_per}}</td>
                </tr>
                <tr>
                    <td class="judul-data-diri">Alamat</td>
                    <td>:</td>
                    <td>{{$per->alamat_per}}</td> <!--Kolom isi data-->
                </tr>
                <tr>
                    <td class="judul-data-diri">Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$per->jk_per}}</td> <!--Kolom isi data-->
                </tr>
                <tr>
                    <td class="judul-data-diri">Asal Posyandu</td>
                    <td>:</td>
                    <td>{{$per->nama_pos}}</td> <!--Kolom isi data-->
                </tr>
            </table>

            <!--
                <ul>
                    <p class="data-profil">No.Id &emsp; &emsp; &emsp; &emsp; &emsp; :#{{$per->id}}</p>
                    <p class="data-profil">No Pegawai &emsp; &emsp; :{{$per->no_per}}</p>
                    <p class="data-profil">Tanggal Lahir &emsp; &emsp; : {{$per->tgllahir_per}}</p>
                    <p class="data-profil">Alamat &emsp; &emsp; &emsp; &emsp; &ensp;: {{$per->alamat_per}}</p>
                    <p class="data-profil">Jenis Kelamin &emsp; &nbsp;&ensp;&ensp;: {{$per->jk_per}}</p>
                    <p class="data-profil">Asal Posyandu &emsp; &nbsp;&ensp;&ensp;: {{$per->nama_pos}}</p>
                  
                </ul>
            -->
                
        </div>
        <div class="box-profil-2">
            <div class="square-profil"></div>
            <div> <img class="square-profil" src="/img/Profile-Logo.png" alt="Foto Profil"> </div>
            <div class="nama-profil"><br/>{{$per->nama_per}}</div>
            <!--<div class="usia-profil"></div>-->
        </div>          
        </div>
        
        <!-- table daftar nama lansia-->
       
            <table width=45% class="daftarnamalansia">
                <thead>
                    <tr>
                        <td class="header">Nama Lansia</td>
                        <td class="header">Alamat</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($lansia as $lan)   
                    <tr>
                        <td>{{$lan->nama_lan}}</td>
                        <td>{{$lan->alamat_lan}}</td>

                        <td>
                        <form method="post" action='/dasboard/perawat/tambahriwayat'>
                        {{ csrf_field() }}
                        <input style="width:10px;background-color:transparent;border:none;color:transparent;" name="username_lan" value="{{$lan->username_lan}}">
                        <button style="background-color:blue;color:pink" type="submit">Tambah Riwayat</button>
                        </form>

                        <form method="post" action='/dasboard/perawat/tambahobat'>
                        {{ csrf_field() }}
                        <input style="width:10px; background-color:transparent;border:none;color:transparent;" name="username_lan" value="{{$lan->username_lan}}">
                        <button style="background-color:blue;color:pink" type="submit">Tambah Obat</button>
                        </form>
                        </td>
                    </tr>
            @endforeach
            @endforeach
            </table>
        </div>

         
        <!--calender-->
        <div class="calendar-box"></div>
        <div class="calendar">
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">May</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2021</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Minggu</div>
                    <div>Senin</div>
                    <div>Selasa</div>
                    <div>Rabu</div>
                    <div>Kamis</div>
                    <div>Jumat</div>
                    <div>Sabtu</div>
                </div>
                <div class="calendar-days"></div>
            </div>
            <div class="month-list"></div>
        </div>
        <script src="/js/Calendar.js"></script>
</body>
</html>