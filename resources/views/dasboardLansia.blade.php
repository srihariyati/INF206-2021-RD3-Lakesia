<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKESIA | Dasboard</title>

    <!-- css here -->
    <link rel="stylesheet" href="/css/CalendarStyle.css">
    <link rel="stylesheet" href="/css/LansiaStyle.css">
    
</head>
<body>
@foreach($lansia as $l)   
<div> <img class="lakesia-logo" src="../img/Logo.png" alt="Lakesia Logo"> </div>
        <div class="menu-bar">
            <div class="menu-text">Menu</div>
                <div class="line"></div>

                <form method="get" action="/dasboard/lansia/riwayatcheckup">
                    <input style=" background-color:transparent;color:transparent;border:none;"name="username_lan" value="{{$l->username_lan}}" readonly><br>
                    <button type="submit" class="button button-riwayat">Riwayat Check Up</button>
                </form>

                <form method="get" action="/dasboard/lansia/checkupsekarang">
                <input style=" background-color:transparent;color:transparent;border:none;"name="username_lan" value="{{$l->username_lan}}" readonly><br>
                    <button type="submit" class="button button-cek-up">Check Up Sekarang</button>
                </form>
                    <div class="button button-emergency">Emergency</div>
                </div>
                <div class="daftar-obat-box">
                    <div class="obat-text">Daftar Obat yang Harus Diminum</div>
                    <table>
                        <thead>
                            <tr><br><br><br><br>
                                <td>&nbsp;&nbsp;&nbsp;Nama Obat</td><br>
                                <td>&nbsp;&nbsp;&nbsp;Jadwal</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($obat as $o)
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;{{$o->nama_obat}}</td>
                                <td>&nbsp;&nbsp;&nbsp;{{$o->jadwal}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        <!-- info grafis lansia --> 
          <!--menampilkan data --> <!--start-->
      
        <div class="box-informasi berat-badan">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Berat</div>
            <div class="isi-informasi">{{$l->berat}} Kg</div>
        </div>
        <div class="box-informasi golongan-darah">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Golongan darah</div>
            <div class="isi-informasi">{{$l->goldar}}</div>
        </div>
        <div class="box-informasi tinggi-badan">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Tinggi</div>
            <div class="isi-informasi">{{$l->tinggi}} cm</div>
        </div>

        <div class="box-informasi denyut-nadi">
            <div class="box-acs-1"></div>
            <div class="box-acs-2"></div>
            <div class="informasi-judul">Nadi</div>
            <div class="isi-informasi">-</div>
        </div>
        <!-- info grafis lansia END-->


        
     

        <!-- profil lansia-->
        <div class="circle-profil"></div>
        <div> <img class="foto-profil" src="/img/Profile-Logo.png" alt="Foto profil"></div>
        <div> <a style="color:red; left: 1400px;top: 40px;" href="/">Logout</a></div>
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
         
        <div id="box">
             Masukkan Catatan anda <br><br>
             <form method="post" action="/catatan">
             {{ csrf_field() }}
             <textarea style="width: 350px; height:200px;" name="note" required></textarea>
             <input style=" color:white;border:none;"name="username_lan" value="{{$l->username_lan}}"><br>
             <button type="submit">Simpan</button>
             <a href=# class="batal" style="font-size:25px;">×</a>
             </form>
    
          <!--menampilkan data --> <!--end-->
          @endforeach

           <!-- catatan-->
        </div>
        <div class="notes-box">
            <div class="notes-text">Notes</div>
            <a style="font-size:50px; color:black; text-decoration:none;" href="#box">+</a> 
            <table style="solid black;">
            <br> <br>
            @foreach($catatan as $c)
            
            <tr>{{$c->isi}}<br></tr>
            @endforeach
            </table>        
        </div>
       
</body>
</html>