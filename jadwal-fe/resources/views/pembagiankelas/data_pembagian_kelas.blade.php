@extends('layout.main')
@section('content')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pembagian Kelas Siswa</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pembagian Kelas Siswa</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/pembagiankelas/create" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Yuke</td>
                        <td>A</td>
                        <td>
                          <a href="/jadwal/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Faridah</td>
                        <td>B</td>
                        <td>
                          <a href="/jadwal/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </tr>
                       <tr>
                        <td>3</td>
                        <td>Anisa</td>
                        <td>C</td>
                        <td>
                          <a href="/jadwal/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </tr>
                       <tr>
                        <td>4</td>
                        <td>Azmi</td>
                        <td>C</td>
                        <td>
                          <a href="/jadwal/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </tr>
                       <tr>
                        <td>5</td>
                        <td>Nadindra</td>
                        <td>B</td>
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