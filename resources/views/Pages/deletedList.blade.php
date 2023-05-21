@extends('welcome')
@section('content')
    <h4 class="title text-center fw-bold my-4">
        Data Siswa/Siwi yang Terhapus</h4>
    <div class="student-table p-3">
        <table class="table table-siswa border">
            <thead>
                <tr>
                    <th class="border text-center" scope="col">No</th>
                    <th class="border text-center" scope="col">Nama</th>
                    <th class="border text-center"scope="col">NIS</th>
                    <th class="border text-center" scope="col">Kelas</th>
                    <th class="border text-center" scope="col">Wali Kelas</th>
                    <th class="border text-center" scope="col">Extracurricular</th>
                    <th class="border text-center" scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $siswa)
                    <tr>
                        <td class="border text-center" scope="row">{{ $loop->iteration }}</th>
                        <td class="border">{{ $siswa->name }}</td>
                        <td class="border">{{ $siswa->NIS }}</td>
                        <td class="border">{{ $siswa->classroom->kelas }}</td>
                        <td class="border">{{ $siswa->classroom->homeroom_teacher->nama_wali_kelas }}</td>
                        <td class="border">
                            @foreach ($siswa->extracurriculars as $ekskul)
                                - {{ $ekskul->nama_extracurricular }} <br>
                            @endforeach
                        </td>
                        <td class="border text-center"><a href="/restore/{{ $siswa->id }}">
                                <button type="button" class="btn btn-detail-student">Pulihkan</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
