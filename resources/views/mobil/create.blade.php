@extends('template')
@section('judul_halaman', 'Data Mobil')
@section('konten')
    <br><a href="/mobil" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Mobil
        </div>

        <div class="card-body">
            <form action="/mobil/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Mobil</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required placeholder="Contoh: Toyota Avanza">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock" id="stock" class="form-control" required min="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y">Ya (Y)</option>
                            <option value="T">Tidak (T)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
