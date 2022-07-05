@extends('layout.main')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Detail Data</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="/pegawai/view/{{$pass['id']}}" method="post" novalidate>
                        @csrf @method('put')
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-user"></i> <small>Data Pribadi</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>NIP<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['nip']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>NIK<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['nik']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nama Lengkap<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['nama']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Jenis Kelamin<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                @if($pass['datapribadi']['jk'] === 'L')
                                                  <label>Laki-Laki</label>
                                                @elseif($pass['datapribadi']['jk'] === 'P')
                                                  <label>Perempuan</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Tempat Lahir<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['tempat_lahir']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Tanggal Lahir<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['tgl_lahir']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Status Pernikahan<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['status']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>No HP<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['no_hp']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Email<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['email']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Alamat<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['alamat']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-institution"></i> <small>Riwayat Pendidikan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Pendidikan Terakhir<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['pendidikan_terakhir']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Nama TempatPendidikan<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['tempat_pendidikan']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Tahun Masuk<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['datapribadi']['tahun_masuk']}}</label>    
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Tahun Lulus<span class="required"></span></b></label>
                                        <div class="col-md-6 col-sm-6">
                                            <label>:</label>
                                            <label>{{$pass['datapribadi']['tahun_lulus']}}</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-user"></i> <small>Data Pegawai</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Jabatan<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['jabatan']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Pangkat<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['pangkat']}}</label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Gaji Pokok<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['gaji_pokok']}}</label>
                                        </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3"><b>Sumber Gaji<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['sumber_gaji']}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-3 offset-md-5">
                                    <br>
                                    <a href="/pegawai/view" class="btn btn-primary">Back</a>
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

