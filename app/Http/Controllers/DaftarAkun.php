<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class DaftarAkun extends Controller
{
   
    public function index()
    {
        return view('DaftarPerawat.blade');
    }
}