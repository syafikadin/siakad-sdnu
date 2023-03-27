@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Mata Pelajaran</h1>
    </div>

    <div class="table-responsive col-lg-8">
      <a href="/admin/students/create" class="btn btn-primary">Tambah Mata Pelajaran</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr class="text-center">
              <th class="text-center" scope="col">No</th>
              <th scope="col">Kode Kelas</th>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Nama Kelas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mapels as $mapel)    
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $mapel->kode_mata_pelajaran }}</td>
              <td>{{ $mapel->mata_pelajaran }}</td>
              <td>{{ $mapel->kelas->nama_kelas }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection