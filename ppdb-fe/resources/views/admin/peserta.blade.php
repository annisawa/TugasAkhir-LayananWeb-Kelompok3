@extends('layout.main-admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Peserta PPDB Online SMK Cendikia</small></h3>
              </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href=""><h2><i class="fa fa-users"></i> <small>Data Peserta</small></h2></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center"><b>No</b></td>
                          <td align="center"><b>Nama</b></td>
                          <td align="center"><b>Jenis Kelamin</b></td>
                          <td align="center"><b>No HP</b></td>
                          <td align="center"><b>Alamat</b></td>
                          <td align="center"><b>Tanggal Pendaftaran</b></td>
                          <td align="center"><b>Option</b></td>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($pass as $data)
                          <tr>
                              <td align="center">{{$loop->iteration}}</td>
                              <td>{{$data['siswa']['nama']}}</td>
                              <td>{{ ($data['siswa']['jk'] === 'P') ? 'Perempuan' : ''}}{{ ($data['siswa']['jk'] === 'L') ? 'Laki-Laki' : ''}}</td>
                              <td>{{$data['siswa']['no_hp']}}</td>
                              <td>{{$data['siswa']['alamat']}}</td>
                              <td>{{$data['created_at']}}</td>
                              <td align="center">
                                <form class="m-1" action="/admin-peserta/{{$data['id']}}" method="GET" >

                                    @csrf
                                    @method('show')
                                    <input type="submit" class="btn btn-warning " value="Detail">

                                </form>
                                <form action="/admin-peserta/{{$data['id']}}/edit" method="GET" >
                                @csrf
                               
                                  <input type="submit" class="btn btn-success " value="Update">
                                </form>
                                <form class="m-1" action="/admin-peserta/{{$data['id']}}" method="post" >

                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger " value="Delete">

                                </form>
                                 <!--<a href="/admin-detail" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>-->
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection('content')