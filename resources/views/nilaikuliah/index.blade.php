@extends('template')
@section('judul_halaman', 'Data nilaikuliah')
@section('konten')

    <p>
        <br><a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data</a>
    </p>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaikuliah as $n)
            <tr>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61)
                        B
                    @elseif ($n->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>
                    {{ $n->SKS * $n->NilaiAngka }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $nilaikuliah->links() }} --}}

@endsection
