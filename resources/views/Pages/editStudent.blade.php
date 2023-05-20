@extends('welcome')
@section('background')
    style="background-color: #EEEEEE;"
@endsection
@section('content')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col col-lg-6">
                <h4 class="title text-center fw-bold my-4">Update Data Siswa/Siswi</h4>
                <div class="table-edit mt-3 p-5">
                    <form action="/editStudent/{{ $data->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-add d-flex flex-column pb-2 mb-4 border-bottom ">
                            <label for="inputName" class="form-label">Nama :</label>
                            <input name="name" value="{{ $data->name }}" class="input-student border border-0"
                                type="text" placeholder="tambahkan nama" required>
                        </div>
                        <div class="form-add d-flex flex-column pb-2 mb-4 border-bottom ">
                            <label for="inputName" class="form-label">NIS :</label>
                            <input name="NIS" value="{{ $data->NIS }}" class="input-student border border-0"
                                type="text" placeholder="maks 8 angka" required>
                        </div>
                        <select name="kelas" class="select-class form-select form-select-sm mb-3"
                            aria-label=".form-select-sm example" required>
                            <option value="{{ $data->classroom->id }}" selected>{{ $data->classroom->kelas }}</option>
                            @foreach ($class as $data)
                                <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                            @endforeach
                        </select>
                        <div class="text-center">
                            <button type="submit" class="m-auto btn btn-submit-student">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
