<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\dateTime;

class LansiaController extends Controller
{
    
    //memasukkan data ke dalam database
    public function register(Request $request)
    {
        //cek username sudah ada atau belum
        $result = DB::table('datalansia')->where('username_lan',$request->username_lan)->get();
        //jika gaada(null) data yang sama dengan username
        if ($result == null){
            echo "<script>
            alert('username sudah terdaftar, pilih username lain');
            </script>";
            return false;
        }
        //cek konfirmasi password
        if($request->password_lan != $request->konfir_pas_lan){
            echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
            return false;
        }
         //enkrispsi password 
         //$password_lan = password_hash($request->password_lan,PASSWORD_DEFAULT);

         //memasukkan data kedalam database
         DB::table('datalansia')->insert([
             'username_lan'=>$request->username_lan,
             'password_lan'=>$request->password_lan,
             'nama_lan'=>$request->nama_lan,
             'nohp_lan'=>$request->nama_lan,
             'alamat_lan'=>$request->alamat_lan,
             'tinggi'=>$request->tinggi,
             'berat'=>$request->berat,
             'tgllahir_lan'=>$request->tgllahir_lan,
             'jk_lan'=>$request->jk_lan,
             'agama'=>$request->agama,
             'goldar'=>$request->goldar
         ]);
    return redirect('/login/lansia');        

    }

    public function login(Request $data)
    {
       
        $pas = DB::table('datalansia')->where('username_lan',$data->username_lan)->first();
        $result = DB::table('datalansia')->where('username_lan',$data->username_lan)->count();
      
       //cek username ada atau tidak
        if ($result == 1 )
        {
           //apabila terdapat username 
            if($data->password_lan == $pas->password_lan)
            {
                //berhasil
                //masuk ke dasboard
                $catatan= DB::table('catatanlansia')->where('username_lan',$data->username_lan)->get();
                //data dari tabel obat
                $obat= DB::table('daftarobat')->where('username_lan',$data->username_lan)->get();
                //mendapatkan data lansia dari username yang di masukkan
                $lansia = DB::table('datalansia')->where( 'username_lan',$data->username_lan)->get();
                return view('dasboardLansia')
                ->with(['lansia'=>$lansia])
                ->with(['obat'=>$obat])
                ->with(['catatan'=>$catatan]);         
                
                
            }else{
                //jika password salah 
                echo "<script>
                alert('password salah');
                </script>";
            }            
        }

        
    }

    public function tambahcatatan(Request $data)
    {
        
        DB::table('catatanlansia')->insert([
            'username_lan'=>$data->username_lan,
            'isi'=>$data->note,
        ]);
        return back();   
    }

    public function checkupnow(Request $data)
    {
        $perawat = DB::table('dataperawat')->get();
        $lansia = DB::table('datalansia')->where('username_lan',$data->username_lan)->get();
        return view('checkupSekarang')
        ->with(['perawat'=>$perawat])
        ->with(['lansia'=>$lansia]);  
    }

    public function lihatriwayat(Request $data)
    {
        $lansia = DB::table('riwayatcheckup')->where('username_lan',$data->username_lan)->get();
        return view('lihatriwayatSaya',['lansia'=>$lansia]);
    }
}
