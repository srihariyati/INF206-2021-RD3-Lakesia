<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\dateTime;


class PerawatController extends Controller
{
    //
    public function register(Request $request)
    {
      //cek username sudah ada atau belum
      $result = DB::table('dataperawat')->where('username_per',$request->username_per)->get();
      //jika gaada(null) data yang sama dengan username
      if ($result == null){
          echo "<script>
          alert('username sudah terdaftar, pilih username lain');
          </script>";
          return false;
      }  
    
    //cek konfirmasi password
    if($request->password_per != $request->konfir_pas_per){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
     //enkrispsi password 
    //$password_per = password_hash($request->password_per,PASSWORD_DEFAULT);

        //memasukkan data kedalam database
        DB::table('dataperawat')->insert([
            'username_per'=>$request->username_per,
            'password_per'=>$request->password_per,
            'no_per'=>$request->no_per,
            'nama_per'=>$request->nama_per,
            'nohp_per'=>$request->nama_per,
            'alamat_per'=>$request->alamat_per,
            'tgllahir_per'=>$request->tgllahir_per,
            'jk_per'=>$request->jk_per,
            'nama_pos'=>$request->nama_pos
        ]);
        return redirect('/login/perawat');
    }

    public function login(Request $data)
    {
        $pas = DB::table('dataperawat')->where('username_per',$data->username_per)->first();
        $result = DB::table('dataperawat')->where('username_per',$data->username_per)->count();
        //cek username ada atau tidak
        if ($result == 1 )
        {
           //apabila terdapat username 
            if($data->password_per == $pas->password_per)
            {
                //berhasil
                //masuk ke dasboard
                $catatan= DB::table('catatanperawat')->where('username_per',$data->username_per)->get();
                //mendapatkan data perawat dari username yang di masukkan
                $lansia = DB::table('datalansia')->get();
                $perawat = DB::table('dataperawat')->where( 'username_per',$data->username_per)->get();
                return view('dasboardPerawat')
                ->with(['perawat'=>$perawat])
                ->with(['catatan'=>$catatan])
                ->with(['lansia'=>$lansia]);         
            }else{
                //jika password salah 
                echo "<script>
                alert('password salah');
                </script>";
            }             
        }
    }

    public function tambahRiwayat(Request $request)
    {        
        $username_lan =$request->username_lan;
        $nama_lan = $request->nama_lan;
        $alamat_lan= $request->alamat_lan;
         return view('formtambahriwayat')
         ->with(['username_lan'=>$username_lan])
         ->with(['nama_lan'=>$nama_lan])
         ->with(['alamat_lan'=>$alamat_lan]);
    }

    public function insertRiwayat(Request $request)
    {
        DB::table('riwayatcheckup')->insert([
            'username_lan'=>$request->username_lan,
            'nama_lan'=>$request->nama_lan,
            'alamat_lan'=>$request->alamat_lan,
            'tanggal'=>$request->tgl,
            'tekanandarah'=>$request->tekanandarah,
            'guladarah'=>$request->gula,
            'asamurat'=>$request->asamurat,
            'kolesterol'=>$request->kolesterol,
            'nama_pemeriksa'=>$request->nama_per
        ]);
        echo"<script>alert('Berhasil Menambahkan Riwayat');</script>";

        return redirect('/dasboard/perawat/lihatriwayatpasien');
    }

    public function tampilriwayat()
    {
        $riwayat = DB::table('riwayatcheckup')->get();
        return view('lihatriwayatlansia',['riwayat'=>$riwayat]);
    }

    public function tambahObat(Request $request)
    {        
       $username_lan   = $request->username_lan;
       $nama_lan       = $request->nama_lan;
       $alamat_lan     = $request->alamat_lan;
        return view('formtambahobat')
        ->with(['username_lan'=>$username_lan])
        ->with(['nama_lan'=>$nama_lan])
        ->with(['alamat_lan'=>$alamat_lan]);
    }

    public function insertObat(Request $request)
    {
        DB::table('daftarobat')->insert([
            'username_lan'=>$request->username_lan,
            'nama_lan'=>$request->nama_lan,
            'alamat_lan'=>$request->alamat_lan,
            'nama_obat'=>$request->namaobat,
            'jadwal'=>$request->jadwal,
        ]);
        echo"<script>alert('Berhasil Menambahkan Obat');</script>";

        return redirect('/dasboard/perawat/daftarobat');
    }
    public function tampilobat()
    {
        $obat = DB::table('daftarobat')->get();
        return view('lihatdaftarobat',['obat'=>$obat]);
    }

}
