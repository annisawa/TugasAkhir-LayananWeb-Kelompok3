@extends('layout.main-admin')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Pengumuman Peserta</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="/admin-pengumuman/{{$pass['id']}}" method="post" novalidate>
                    
                        @csrf @method('put')
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-edit"></i> <small>Pengumuman</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Keterangan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="keterangan">
                                                    <option>--Pilih--</option>
                                                    <option>Lulus</option>
                                                    <option>Tidak Lulus</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-3 offset-md-5">
                                    <br>
                                    <a href="/admin-pengumuman" class="btn btn-primary">Back</a>
                                    <button type='submit' class="btn btn-success">Submit</button>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /page content -->
@endsection('content')



    

   