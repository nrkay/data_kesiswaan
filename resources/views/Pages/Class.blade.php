@extends('welcome')
@section('content')
    <h4 class="text-center mt-4 mb-5">Daftar Kelas Siswa/Siswi</h4>
    <table class="table">
        <thead>
            <tr>
                <th class="border border-3 text-center" scope="col">No</th>
                <th class="border border-3" scope="col">Nama Kelas</th>
                <th class="border border-3"scope="col">Daftar Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <th class="border border-3 text-center" scope="row">{{ $loop->iteration }}</th>
                    <td class="border border-3">{{ $data->kelas }}</td>
                    {{-- <td class="border border-3"> {{ $data->student }} --}}
                    @foreach ($data->student as $students)
                        - {{ $students->name }} <br>
                    @endforeach
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
