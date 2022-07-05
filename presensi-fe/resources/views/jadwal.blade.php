@extends('layout.main')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Jadwal Kelas SMK Cendikia</small></h3>
              </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href=""><h2><i class="fa fa-bullhorn"></i> <small>Jadwal Kelas</small></h2></a>
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
                          <td align="center"><b>Mata Pelajaran</b></td>
                          <td align="center"><b>Guru Mapel</b></td>
                          <td align="center"><b>Kelas</b></td>
                          <td align="center"><b>Hari</b></td>
                          <td align="center"><b>Jam</b></td>
                          <td align="center"><b>Option</b></td>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>No</td>
                          <td>Matematika</td>
                          <td>Wahyu M.Pd</td>
                          <td>X RPL 3</td>
                          <td>Senin</td>
                          <td>08:00-09:00</td>
                          <td align="center">
                            <a href="/admin-presensi" class="btn btn-success">Presensi</a>
                          </td>
                        </tr>
                        
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
        