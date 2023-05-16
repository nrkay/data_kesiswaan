@extends('welcome')
@section('content')
    <h4 class="text-center fw-bold my-4">DAFTAR EKSKUL</h4>
    <div class="section-ekskul m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="border" scope="col">Organisasi</th>
                    <th class="border" scope="col">Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ekskul as $item)
                    <tr>
                        <th class="border" scope="row">{{ $loop->iteration }}</th>
                        <td class="border">{{ $item->nama_extracurricular }}</td>
                        <td class="border">
                            {{-- @foreach ($item->students as $anggota)
                                -{{ $anggota->$name }} <br>
                            @endforeach --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p>{{ $ekskul }}</p>
@endsection
