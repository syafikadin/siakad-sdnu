@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Mata Pelajaran</h1>
    </div>

    <div class="table-responsive col-lg-8">
      <a href="/admin/students/create" class="btn btn-primary">Tambah Mata Pelajaran</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th class="text-center" scope="col">No</th>
              <th scope="col">Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mapels as $mapel)    
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $mapel->mata_pelajaran }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection