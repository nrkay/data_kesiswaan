@extends('welcome')
@section('content')
    <h4 class="text-center fw-bold my-4">Daftar Nama Siswa/Siswi</h4>
    <table class="table table-siswa border">
        <thead>
            <tr>
                <th class="border text-center" scope="col">No</th>
                <th class="border text-center" scope="col">Nama</th>
                <th class="border text-center"scope="col">NIS</th>
                <th class="border text-center" scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $siswa)
                <tr>
                    <th class="border text-center" scope="row">{{ $loop->iteration }}</th>
                    <td class="border">{{ $siswa->name }}</td>
                    <td class="border">{{ $siswa->NIS }}</td>
                    <td class="border">{{ $siswa->classroom->kelas }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
