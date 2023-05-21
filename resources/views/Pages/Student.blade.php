@extends('welcome')
@section('content')
    <h4 class="title text-center fw-bold my-4">
        Daftar Nama Siswa/Siswi</h4>
    <div class="student-table p-3">
        {{-- Menampilkan session flash --}}
        @if (Session::has('status'))
            <div class="alert alert-primary" role="alert">
                Data Berhasil Ditambahkan
            </div>
        @endif
        <div class="d-flex justify-content-end my-3">
            <a href="/addStudent" class="btn btn-add-data">+add</a>
        </div>
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
                @foreach ($data_siswa as $siswa)
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
                        <td class="border text-center"><a href="/detail/{{ $siswa->id }}">
                                <button type="button" class="btn btn-detail-student">Detail</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
