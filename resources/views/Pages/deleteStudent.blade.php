@extends('welcome')
@section('background')
    style="background-color: #F1F6F9;"
@endsection
@section('content')
    <div class="container text-center">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="conf-delete col-8 col-lg-5 col-md-5 p-5">
                <h6 class="text-center text-white">Yakin untuk menghapus data {{ $data->name }}?</h6>
                <div class="d-flex flex-row justify-content-center">
                    <a class="btn btn-delete-student m-3" href="/deleteData/{{ $data->id }}">Hapus</a>
                    <a class="btn btn-cancel-delete m-3" href="/cancelDelete">Batal</a>
                </div>
            </div>

        </div>
    </div>
@endsection
