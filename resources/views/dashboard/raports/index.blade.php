@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Nilai Siswa</h1>
    </div>

    <div class="mb-3">
      <label class="form-label">Tahun Ajaran</label>
      <select type="text" class="form-select tomselected ts-hidden-accessible mb-2" placeholder="Select a date" id="select-tags-advanced" value="" tabindex="-1">
        <option selected>Pilih Tahun Ajaran</option>
        <option value="2019/GENAP">2021/GENAP</option>
        <option value="2019/GENAP">2021/GANJIL</option>
        <option value="2019/GENAP">2020/GENAP</option>
        <option value="2019/GENAP">2020/GANJIL</option>
        <option value="2019/GENAP">2019/GENAP</option>
        <option value="2019/GANJIL">2019/GANJIL</option>
      </select>
      <a href="#" class="btn btn-primary">Tampil</a>
    </div>

    

    <div class="table-responsive col-lg-10">
          <table class="table table-striped table-sm mt-3 border">
            <thead>
              <tr class="text-center align-middle">
                <th rowspan="2">No</th>
                <th rowspan="2">Mata Pelajaran</th>
                <th rowspan="2">KKM</th>
                <th colspan="2">KO1</th>
                <th colspan="2">KO2</th>
                <th colspan="2">SUB1</th>
                <th colspan="2">SUB2</th>
              </tr>
              <tr class="text-center">
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Nilai</th>
                <th>Predikat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>1</td>
                <td>Al Qur'an Hadis</td>
                <td>80</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
              </tr>
              <tr class="text-center">
                <td>2</td>
                <td>Bahasa Indonesia</td>
                <td>80</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
              </tr>
              <tr class="text-center">
                <td>3</td>
                <td>Matematika</td>
                <td>80</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
                <td>82</td>
                <td>B</td>
              </tr>
              {{-- @foreach ($students as $student)    
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->nama }}</td>
                <td class="text-center">
                  <a href="/admin/students/{{ $student->username }}" class="badge bg-info"><span data-feather="info" class="align-text-bottom"></span></a>
                  <a href="/admin/students/{{ $student->username }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
                  
                  <form action="/admin/students/{{ $student->username }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">
                      <span data-feather="trash-2" class="align-text-bottom"></span>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach --}}
            </tbody>
          </table>
        </div>
@endsection