<?php
require 'functionsperawat.php';
    if (isset($_POST["login"])){
        $username_per = $_POST["username_per"];
        $password_per = $_POST["password_per"];

        $result= mysqli_query($conn,"SELECT * FROM dataperawat WHERE
         username_per = '$username_per' ");

         //cek  username
         if (mysqli_num_rows($result)==1){
             //cek password
             $row = mysqli_fetch_assoc($result);
             if(password_verify($username_per, $row["password_per"])){
                 header('Location:Perawat.php');
                 exit;
             }

         }
         $error = true;
}
?>
<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/LoginPageStyle.css">
    </head>

    <body>
    <?php if (isset($error)):?>
        
        <script>
            alert('username / password salah !');
        </script>

    <?php endif; ?>

        <div class="lakesia-text">Lakesia</div>
        <div class="lakesia-text1">Layanan Kesehatan Lansia</div>
        <div> <img class="lakesia-logo" src="../img/Lakesia-Logo.png" alt="Lakesia Logo"> </div>
        <div class="text1">Memudahkan anda untuk pengontrolan kesehatan</div>
        <div class="text2">Wilayah Kopelma Darussalam</div>
        <div> <img class="medical-logo" src="../img/Medical-Logo.png" alt="Medical Logo"> </div>
        <div> <img class="profile-logo" src="../img/Profile-Logo.png" alt="Profile Logo"> </div>
        
        <div >

        <form method="post">
            <table class="login">
                <label class="textlogin">Akun Perawat</label>
                <tr>
                    <td>Username <br> <input type="text" placeholder="Enter Username" name="username_per" required> </td>
                </tr>
                <tr>
                    <td>Password <br> <input type="password"  placeholder="Enter Password" name="password_per" required> </td>
                </tr>
                <tr>
                    <td><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
        
        <div class= "text3">Belum punya akun? </div>
        <div class="daftar">
            <a href=#box>Daftar disini</a>.</div>
        <div class="foot"></div>
        <div class="text5">© 2021 Made by Tim RD 3</div>

        
           <div id="box">
               Daftar sebagai <br><br>
               <a href=daftar/lansia class="lansia"> Lansia </a><br>
               <a href=daftar/perawat class="perawat"> Perawat </a><br>
               <a href=# class="batal"> x </a>
            </div>
        
</html>