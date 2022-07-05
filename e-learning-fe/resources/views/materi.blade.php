@extends('layout.main')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Materi Pembelajaran</small></h3>
              </div>

            <div class="clearfix"></div>
            <div class="form-group">
                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#modalmateri">
                    <i class="fa fa-plus-circle"></i> Buat Materi
                </button>
                <button type="button" class="btn btn-warning mb-5"><a href="javascript:history.back()">Back</a>
                </button>
            </div>
            <div class="modal fade" id="modalmateri" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="overflow: auto !important;">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="formmateri">
                            <div class="modal-body">
                                <div class="form-group">

                                    <input type="text" class="form-control" name="judul" aria-describedby="helpId" placeholder="Judul Materi" required>

                                </div>
                                <div class="form-group">
                                    <textarea name='isimateri' class='editor1' rows='10' cols='80' style='width:100%;'></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="file">File Materi</label>
                                    <input type="file" class="form-control-file" name="file" placeholder="" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">format file (doc/docx/xls/xlsx/pdf)</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="add.html"><h2><i class="fa fa-bullhorn"></i> <small>Materi Pembelaaran</small></h2></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center">Judul Materi</td>
                          <td align="center">Tanggal Publish</td>
                          <td align="center">Kelas</td>
                          <td align="center">File</td>
                          <td align="center">Option</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Bangun Ruang</td>
                          <td>20 Juni 2022</td>
                          <td>A, B, C</td>
                          <td>BangunRuang.pdf</td>
                          <td align="center">
                            <a href="" class="btn btn-danger">Hapus</a>
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