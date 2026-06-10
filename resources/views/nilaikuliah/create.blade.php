@extends('template')
@section('judul_halaman', 'Data nilaikuliah')
@section('konten')
    <br><a href="/nilaikuliah" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="/nilaikuliah/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control" required min="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="number" name="SKS" id="SKS" class="form-control" required min="0">
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
