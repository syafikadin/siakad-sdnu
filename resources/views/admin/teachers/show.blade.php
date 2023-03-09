@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-5 mt-5 ms-5">
                <a href="/admin/teachers" class="btn btn-success"><span data-feather="corner-up-left" class="align-text-bottom"></span> Back to All teacher</a>
                <a href="/admin/teachers/{{ $teacher->username }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                <form action="/admin/teachers/{{ $teacher->username }}" method="post" class="d-inline">
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
                <h2 class="mb-4">{{ $teacher->nama }}</h2>
                <p>NIK : {{ $teacher->nik }}</p>
                {{-- <p>Kelas : {{ $teacher->kelas }}</p> --}}
                <p>Jenis Kelamin : {{ $teacher->jenis_kelamin }}</p>
                <p>Tanggal Lahir : {{ $teacher->tanggal_lahir }}</p>
                <p>Alamat : {{ $teacher->alamat }}</p>
                <p>Username : {{ $teacher->username }}</p>
                <p>Password : {{ $teacher->password }}</p>
            </div>
        </div>
    </div>
@endsection