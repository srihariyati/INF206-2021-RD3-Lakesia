<?php
  $conn =mysqli_connect("localhost","root","rd3lakesia","rd3_lakesia"); 

  function registrasi($data){
    global $conn;
   
    $username_per = strtolower(stripslashes($data["username_per"]));
    $password_per = mysqli_real_escape_string($conn,$data["password_per"]);
    $konfir_pas_per = mysqli_real_escape_string($conn,$data["konfir_pas_per"]);
    
    //cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username_per FROM dataperawat WHERE username_per ='$username_per'");
    
    if (mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah terdaftar, pilih username lain');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if($password_per !== $konfir_pas_per){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    $no_per = $data["no_per"];
    $nama_per= $data["nama_per"];
    $nohp_per = $data["nohp_per"];
    $alamat_per = $data["alamat_per"];
    $tgllahir_per = $data["tgllahir_per"];
    $jk_per = $data["jk_per"];
    $nama_pos = $data["nama_pos"];

     //enkripsi password
     $password_per = password_hash($password_per,PASSWORD_DEFAULT);
  
     //tambahkan perawat ke database
    mysqli_query($conn, "INSERT INTO dataperawat VALUES(
    '$username_per','$password_per',
    '$no_per','$nama_per',
    '$nohp_per','$alamat_per',
    '$tgllahir_per',
    '$jk_per','$nama_pos','')");

    return mysqli_affected_rows($conn);
}
?>