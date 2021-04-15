@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h2 style="margin-bottom: 50px;">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            <h1 style="margin-bottom: 50px">KARTU HASIL STUDI (KHS)</h1>
        </div>
        <p>
            <b>Nama:</b> {{ $mahasiswa->Nama }} <br>
            <b>NIM:</b> {{ $mahasiswa->Nim }} <br>
            <b>Kelas:</b> {{ $mahasiswa->kelas->nama_kelas }} <br><br>
        </p>
        <table class="table table-bordered">
            <thead>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </thead>
            <tbody>
                @foreach ($mahasiswa->matakuliah as $item)
                    <tr>
                        <td>{{ $item->nama_matkul }}</td>
                        <td>{{ $item->sks }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>{{ $item->pivot->nilai }}</td>
                @endforeach
                </tr>

            </tbody>
        </table>
    </div>
@endsection