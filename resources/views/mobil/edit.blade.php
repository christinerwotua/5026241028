@extends('template')
@section('judul_halaman', 'Data Mobil')
@section('konten')
<br><a href="/mobil" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($mobil as $m)

    <div class="card">
        <div class="card-header">
            Form Edit Data Mobil
        </div>

        <div class="card-body">
            <form action="/mobil/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $m->kodemobil }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Mobil</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required value="{{ $m->merkmobil }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock" id="stock" class="form-control" required min="0" value="{{ $m->stockmobil }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Ya (Y)</option>
                            <option value="T" {{ $m->tersedia == 'T' ? 'selected' : '' }}>Tidak (T)</option>
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

    @endforeach
@endsection
