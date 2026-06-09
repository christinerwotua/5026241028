<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        // mengambil data dari table mobil
    	// $pegawai = DB::table('mobil')->get();

        // mengambil data dari table mobil
        $mobil = DB::table('mobil')->paginate(10);

        // Mengarahkan ke file index.blade.php di dalam folder mobil
        return view('mobil.index', ['mobil' => $mobil]);
    }

    // Menampilkan form tambah mobil
    public function tambah()
    {
        return view('mobil.create');
    }

    // Menyimpan data mobil baru ke database
    public function store(Request $request)
    {
        DB::table('mobil')->insert([
            'merkmobil'  => $request->merk,
            'stockmobil' => $request->stock,
            'tersedia'   => $request->tersedia
        ]);

        return redirect('/mobil');
    }

    // Menampilkan form edit mobil
    public function edit($id)
    {
        $mobil = DB::table('mobil')->where('kodemobil', $id)->get();
        return view('mobil.edit', ['mobil' => $mobil]);
    }

    // update data mobil
    public function update(Request $request)
    {
        DB::table('mobil')->where('kodemobil', $request->id)->update([
            'merkmobil'  => $request->merk,
            'stockmobil' => $request->stock,
            'tersedia'   => $request->tersedia
        ]);

        return redirect('/mobil');
    }

    // Menghapus data mobil
    public function hapus($id)
    {
        DB::table('mobil')->where('kodemobil', $id)->delete();

        return redirect('/mobil');
    }

    // Mencari data mobil berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $mobil = DB::table('mobil')
            ->where('merkmobil', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('mobil.index', ['mobil' => $mobil]);
    }
}
