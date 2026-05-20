<?php

namespace App\Http\Controllers;

Use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PegawaiDBController extends Controller
{
   public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('indexnew',['pegawai' => $pegawai]);

    }
}
