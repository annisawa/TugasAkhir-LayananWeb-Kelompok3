@extends('layout.main')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Kelas</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/kelas/create" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach($pass as $data)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$data['kelas']}}</td>
                              <td align="left">
                                <form action="/kelas/{{$data['id']}}/edit" method="GET" >
                                @csrf
                               
                                  <input type="submit" class="btn btn-warning " value="Update">
                                </form>
                                <form class="m-1" action="/kelas/{{$data['id']}}" method="post" >

                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger " value="Delete">

                                </form>
                              </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
@endsection('content')