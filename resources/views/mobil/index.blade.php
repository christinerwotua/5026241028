@extends('template')
@section('judul_halaman', 'Data Mobil')
@section('konten')

    <p>
        <br><a href="/mobil/tambah" class="btn btn-primary"> + Tambah Mobil Baru</a>
    </p>

    <p>Cari Data Mobil :</p>
    <form action="/mobil/cari" method="GET" class="mb-4">
        <div class="input-group text-start">
            <input type="text" name="cari" id="cari" placeholder="Cari Merk Mobil .."
            class="form-control" value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-success">
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Mobil</th>
                <th>Merk Mobil</th>
                <th>Stock Mobil</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $m)
            <tr>
                <td>{{ $m->kodemobil }}</td>
                <td>{{ $m->merkmobil }}</td>
                <td>{{ $m->stockmobil }}</td>
                <td>
                    <span class="badge {{ $m->tersedia == 'Y' ? 'bg-success' : 'bg-danger' }}">
                        {{ $m->tersedia == 'Y' ? 'Ya' : 'Tidak' }}
                    </span>
                </td>
                <td>
                    <a href="/mobil/edit/{{ $m->kodemobil }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/mobil/hapus/{{ $m->kodemobil }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mobil->links() }}

@endsection
