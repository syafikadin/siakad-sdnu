@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-5 mt-5 ms-5">
                <a href="/admin/students" class="btn btn-success"><span data-feather="corner-up-left" class="align-text-bottom"></span> Back to All Student</a>
                <a href="/admin/students/{{ $student->username }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                <form action="/admin/students/{{ $student->username }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">
                        <span data-feather="trash-2" class="align-text-bottom"></span> Delete
                    </button>
                </form>
            </div>
        </div>
        <div class="row my-3 mt-4">
            <div class="col-lg-2 ms-5 mt-2">

                <div class="div" style="width: 150px; height: 250px; background-color: teal">

                </div>
            </div>
            <div class="col-lg-8 ms-4">
                <h2 class="mb-4">{{ $student->nama }}</h2>
                <p>NIS : {{ $student->nis }}</p>
                <p>Kelas : {{ $student->kelas }}</p>
                <p>Jenis Kelamin : {{ $student->jenis_kelamin }}</p>
                <p>Tanggal Lahir : {{ $student->tanggal_lahir }}</p>
                <p>Alamat : {{ $student->alamat }}</p>
                <p>Username : {{ $student->username }}</p>
                <p>Password : {{ $student->password }}</p>
            </div>
        </div>
    </div>
@endsection