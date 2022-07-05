@extends('layout.main-peserta')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Pembayaran PPDB Online SMK Cendikia</small></h3>
              </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href=""><h2><i class="fa fa-money"></i> <small>Data Pembayaran Peserta</small></h2></a>
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
                          <td align="center"><b>Nama Peserta</b></td>
                          <td align="center"><b>Bukti Pembayaran</b></td>
                          <td align="center"><b>Status</b></td>
                          <td align="center"><b>Aksi</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pass as $data)
                          <tr>
                              <td align="center">{{$loop->iteration}}</td>
                              <td>{{$data['siswa']['nama']}}</td>
                              <td>{{$data['bukti']}}</td>
                              <td align="center">
                                @if($data['status'] === 'Belum Bayar')
                                  <span class="badge badge-danger">{{$data['status']}}</span>
                                @elseif($data['status'] === 'Lunas')
                                  <span class="badge badge-success">{{$data['status']}}</span>
                                @endif
                              </td>
                              <td align="center">
                                <form action="/admin-pembayaran/{{$data['id']}}/edit" method="GET" >
                                @csrf
                               
                                <input type="submit" class="btn btn-info " value="Upload">
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