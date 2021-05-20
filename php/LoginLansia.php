<?php
require 'functionslansia.php';
    if (isset($_POST["login"])){
        $username_lan = $_POST["username_lan"];
        $password_lan = $_POST["password_lan"];

        $result= mysqli_query($conn,"SELECT * FROM datalansia WHERE
         username_lan = '$username_lan' ");

         //cek  username
         if (mysqli_num_rows($result)==1){
             //cek password
             $row = mysqli_fetch_assoc($result);
             if(password_verify($username_lan, $row["password_lan"])){
                 header('Location:Lansia.php');
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

        <form method="post" action= "">
            <table class="login">
                <label class="textlogin">Akun Lansia</label>
                <tr>
                    <td>Username <br> <input type="text" name="username_lan" placeholder="Enter Username" required> </td>
                </tr>
                <tr>
                    <td>Password <br> <input type="password" name="password_lan" placeholder="Enter Password" required> </td>
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
               <a href=DaftarLansia.php class="lansia"> Lansia </a><br>
               <a href=DaftarPerawat.php class="perawat"> Perawat </a><br>
               <a href=# class="batal"> x </a>
            </div>
        
</html>