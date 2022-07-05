@extends('layout.main-peserta')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Pembayaran Pendaftaran</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="/admin-pembayaran/{{$pass['id']}}" method="post" novalidate>
                    
                        @csrf @method('put')
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-edit"></i> <small>Upload Bukti Pembayaran</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-5 col-sm-5 label-align">Upload Bukti<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file"  name="bukti" required="required"/>
                                                <input type="hidden" name="status" value="Lunas">
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
                                    <button type='submit' class="btn btn-primary">Upload</button>
                                    <button type='reset' class="btn btn-success">Reset</button>
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



    

   