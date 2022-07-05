@extends('layout.main')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Jadwal Belajar Mengajar</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Jadwal Belajar Mengajar</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/jadwal/tambah" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Guru</th>
                        <th>Mapel</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <tr>
                        <th>No.</th>
                        <th>Guru</th>
                        <th>Mapel</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>1.</td>                    
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="/jadwal/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

@endsection('content')