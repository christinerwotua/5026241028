<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaikuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
    	$nilaikuliah = DB::table('nilaikuliah')->get();

        // Mengarahkan ke file index.blade.php di dalam folder nilaikuliah
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // Menampilkan form tambah nilaikuliah
    public function tambah()
    {
        return view('nilaikuliah.create');
    }

    // Menyimpan data nilai baru ke database
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka'   => $request->NilaiAngka,
            'SKS'=> $request->SKS,
        ]);

        return redirect('/nilaikuliah');
    }

}
