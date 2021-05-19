<?php
   
   $conn =mysqli_connect("localhost","root","rd3lakesia","rd3_lakesia"); 

function registrasi($data){
    global $conn;
   
    $username_lan = strtolower(stripslashes($data["username_lan"]));
    $password_lan = mysqli_real_escape_string($conn,$data["password_lan"]);
    $konfir_pas_lan = mysqli_real_escape_string($conn,$data["konfir_pas_lan"]);
    
    //cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username_lan FROM datalansia WHERE username_lan ='$username_lan'");
    
    if (mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username suda terdaftar, pilih username lain');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if($password_lan !== $konfir_pas_lan){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    

    $nama_lan = $data["nama_lan"];
    $nohp_lan = $data["nohp_lan"];
    $alamat_lan= $data["alamat_lan"];
    $tinggi = $data["tinggi"];
    $berat = $data["berat"];
    $tgllahir_lan = $data["tgllahir_lan"];
    $jk_lan =$data["jk_lan"];
    $agama = $data["agama"];
    $goldar = $data["goldar"];
    
    //enkripsi password
    $password_lan = password_hash($password_lan,PASSWORD_DEFAULT);
  
    //tambahkan lansia ke database
    mysqli_query($conn, "INSERT INTO datalansia VALUES('$username_lan',
    '$password_lan','$nama_lan',
    '$nohp_lan','$alamat_lan',
    '$tinggi','$berat','$tgllahir_lan',
    '$jk_lan','$agama','$goldar','')");

    return mysqli_affected_rows($conn);
}
?>
