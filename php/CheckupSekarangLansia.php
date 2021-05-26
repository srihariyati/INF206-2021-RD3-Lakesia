<?php
    include "koneksi.php";
    $ambildata = mysqli_query($conn,"SELECT * FROM dataperawat");
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/CheckupStyle.css">
        <link rel="stylesheet" href="../css/TableStyle.css">
        <script src="..\js\CheckUpSekarang.js"></script>
    </head>

    <body>
    
        
    <div> <img class="Lakesia-Logo" src="../img/Logo.png" alt="Lakesia Logo"> </div>
    
    <div class='CheckUpSekarang-text'>Check Up Sekarang </div>
    <div class="tableperawat-tersedia-text">Perawat yang tersedia
    <br><br>
    <table  width="250%">
         <tr>
            <td class="header">Nama Perawat</td>
            <td class="header">Alamat</td>
          
         </tr> 
        <?php while($tampil = mysqli_fetch_array($ambildata)){?>
            <tr>
                <td><?php echo $tampil['nama_per'];?></td>
                <td><?php echo $tampil['alamat_per'];?><td>
                <td>
                    <div class="infokontak">
                        <button>Info Kontak</button>
                    </div>
                </td>
            </tr>

            <?php } ?>
        </table>
    </div>
   
    <div class="circle-profil"></div>
    <div class="box-name">Nama Pasien</div>
    <div class="box-profil-1"></div>
    <div class="box-profil-2"></div>
    <div class="box-cek-terakhir">
        <div class="cek-judul">Jadwal Check Up Terakhir</div>
        <div> <img class="date-logo" src="../img/date.png" alt="date"> </div>
        <div> <img class="clock-logo" src="../img/clock.png" alt=""> </div>
    </div>
    <div class="box-cek-berikut">
        <div class="cek-judul">Jadwal Check Up Berikutnya</div>
        <div> <img class="date-logo" src="../img/date.png" alt="date"> </div>
        <div> <img class="clock-logo" src="../img/clock.png" alt=""> </div>
   
  

     <a onclick="goBack()" class="previous round">&#8592;</a>
    
  
    </body>

    
</html>