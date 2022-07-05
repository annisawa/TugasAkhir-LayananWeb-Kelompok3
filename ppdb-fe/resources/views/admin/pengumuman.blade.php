@extends('layout.main-admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Pengumuman PPDB Online SMK Cendikia</small></h3>
              </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href=""><h2><i class="fa fa-bullhorn"></i> <small>Data Pengumuman Peserta</small></h2></a>
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
                          <td align="center"><b>Nama Peserta</b></th>
                          <td align="center"><b>Keterangan</b></th>
                          <td align="center"><b>Option</b></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pass as $data)
                          <tr>
                              <td align="center">{{$loop->iteration}}</td>
                              <td>{{$data['siswa']['nama']}}</td>
                              <td align="center">
                                @if($data['keterangan'] === 'Peserta')
                                  <span class="badge badge-warning">{{$data['keterangan']}}</span>
                                @elseif($data['keterangan'] === 'Lulus')
                                  <span class="badge badge-success">{{$data['keterangan']}}</span>
                                @elseif($data['keterangan'] === 'Tidak Lulus')
                                  <span class="badge badge-danger">{{$data['keterangan']}}</span>
                                @endif
                              </td>
                              <td align="center">
                                <form action="/admin-pengumuman/{{$data['id']}}/edit" method="GET" >
                                @csrf
                               
                                <input type="submit" class="btn btn-success " value="Update">
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection('content')