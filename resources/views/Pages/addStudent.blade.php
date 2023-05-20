@extends('welcome')
@section('background')
    style="background-color: #F1F6F9;"
@endsection
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col col-lg-6">
                <h4 class="title text-center fw-bold my-4">Menambahkan Data Baru</h4>
                <div class="table-add mt-3 bg-white p-5">
                    <form action="/addStudent" method="POST">
                        @csrf
                        <div class="form-add d-flex flex-column pb-2 mb-4 border-bottom ">
                            <label for="inputName" class="form-label">Nama :</label>
                            <input name="name" class="input-student border border-0" type="text"
                                placeholder="tambahkan nama" required>
                        </div>
                        <div class="form-add d-flex flex-column pb-2 mb-4 border-bottom ">
                            <label for="inputName" class="form-label">NIS :</label>
                            <input name="NIS" class="input-student border border-0" type="text"
                                placeholder="maks 8 angka" required>
                        </div>
                        <select name="kelas" class="select-class form-select form-select-sm mb-3"
                            aria-label=".form-select-sm example" required>
                            <option selected>Klik untuk menambahkan kelas</option>
                            @foreach ($data as $class)
                                <option value="{{ $class->id }}">{{ $class->kelas }}</option>
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
