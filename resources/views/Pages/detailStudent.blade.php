@extends('welcome')
@section('content')
    <h4 class="font-weight-bold text-center my-3">Nur Khairiyah</h4>
    <div class="container text-center">
        <div class="row d-flex justify-content-center">
            <div class="main-detail-mahasiswa col col-lg-8 p-5 ">
                <div class="detail-siswa m-auto ">
                    <table class="table border">
                        <tr>
                            <th class="border" scope="col">Nama :</th>
                            <td scope="col">{{ $data_siswa->name }}</td>
                        </tr>
                        <tr>
                            <th class="border" scope="col">NIS :</th>
                            <td scope="col">{{ $data_siswa->NIS }}</td>
                        </tr>
                        <tr>
                            <th class="border" scope="col">Kelas :</th>
                            <td scope="col">{{ $data_siswa->classroom->kelas }}</td>
                        </tr>
                        <tr>
                            <th class="border" scope="col">Wali Kelas :</th>
                            <td scope="col">{{ $data_siswa->classroom->homeroom_teacher->nama_wali_kelas }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Extracurricular :</th>
                            <td scope="col">
                                @if ($data_siswa->extracurriculars->isEmpty())
                                    <p>Siswa tidak mengikuti organisasi</p>
                                @else
                                    @foreach ($data_siswa->extracurriculars as $extracurricular)
                                        - {{ $extracurricular->nama_extracurricular }} <br>
                                    @endforeach
                                @endif

                            </td>
                        </tr>
                    </table>
                    <div class="">
                        <a href="/editStudent/{{ $data_siswa->id }}" class="btn btn-edit-data m-auto">edit data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="detail-mahasiswa m-auto ">
        <table class="table">
            <tr>
                <th scope="col">Nama :</th>
                <th scope="col">{{ $data_siswa->name }}</th>
            </tr>
            <tr>
                <th scope="col">NIS :</th>
                <th scope="col">{{ $data_siswa->NIS }}</th>
            </tr>
            <tr>
                <th scope="col">Kelas :</th>
                <th scope="col">{{ $data_siswa->classroom->kelas }}</th>
            </tr>
            <tr>
                <th scope="col">Wali Kelas :</th>
                <th scope="col">{{ $data_siswa->classroom->homeroom_teacher->nama_wali_kelas }}</th>
            </tr>
            <tr>
                <th scope="col">Extracurricular :</th>
                <th scope="col">
                    @if ($data_siswa->extracurriculars->isEmpty())
                        <p>Siswa tidak mengikuti organisasi</p>
                    @else
                        @foreach ($data_siswa->extracurriculars as $extracurricular)
                            - {{ $extracurricular->nama_extracurricular }} <br>
                        @endforeach
                    @endif

                </th>
            </tr>
        </table>
    </div> --}}

@endsection
