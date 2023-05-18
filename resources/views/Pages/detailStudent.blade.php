@extends('welcome')
@section('content')
    <h4 class="font-weight-bold text-center my-3">Nur Khairiyah</h4>
    <div class="detail-mahasiswa m-auto">
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
    </div>

@endsection
