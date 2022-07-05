@extends('layout.main-admin')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Detail Data Peserta Didik Baru</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="" method="post" novalidate>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-user"></i> <small>Data Siswa</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>NISN<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['nisn']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>NIK<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['nik']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nama Lengkap<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['nama']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Jenis Kelamin<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                @if($pass['siswa']['jk'] === 'L')
                                                  <label>Laki-Laki</label>
                                                @elseif($pass['siswa']['jk'] === 'P')
                                                  <label>Perempuan</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Tempat Lahir<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['tempat_lahir']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Tanggal Lahir<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['tgl_lahir']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Agama<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['agama']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>No HP<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['no_hp']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Email<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['email']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Alamat<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['siswa']['alamat']}}</label>
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
                                    <h2><i class="fa fa-users"></i> <small>Data Orang Tua</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>NIK Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nik_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>NIK Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nik_ibu']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nama Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nama_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Nama Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nama_ibu']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Pendidikan Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['pendidikan_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Pendidikan Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['pendidikan_ibu']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Pekerjaan Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['pekerjaan_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Pekerjaan Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['pekerjaan_ibu']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Penghasilan Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['penghasilan_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Penghasilan Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['penghasilan_ibu']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>No HP Ayah<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nohp_ayah']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>No HP Ibu<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['ortu']['nohp_ibu']}}</label>
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
                                    <h2><i class="fa fa-institution"></i> <small>Data Sekolah</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>NPSN<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                            <label>:</label>
                                            <label>{{$pass['sekolah']['npsn']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nama Sekolah<span class="required"></b></span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <label>:</label>
                                            <label>{{$pass['sekolah']['nama_sekolah']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Status Sekolah<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['sekolah']['status']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Alamat<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['sekolah']['alamat']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Tahun Lulus<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['sekolah']['tahun_lulus']}}</label>
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
                                    <h2><i class="fa fa-file"></i> <small>Data Nilai</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nilai Raport Semester 1<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['raport_smt1']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Nilai Raport Semester 2<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['raport_smt2']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nilai Raport Semester 3<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['raport_smt3']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Nilai Raport Semester 4<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['raport_smt4']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nilai Raport Semester 5<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['raport_smt5']}}</label>
                                            </div>
                                            <label class="col-md-2 col-sm-2"><b>Nilai USBN<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['usbn']}}</label>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Nilai UN<span class="required"></span></b></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>:</label>
                                                <label>{{$pass['nilai']['un']}}</label>
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
                                    <h2><i class="fa fa-lightbulb-o"></i> <small>Pilih Jurusan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2"><b>Jurusan<span class="required"></span></b></label>
                                            <div class="col-md-6 col-sm-6">
                                                <label>:</label>
                                                <label>{{$pass['jurusan']['jurusan']}}</label>
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
                                    <a href="/admin-peserta" class="btn btn-primary">Back</a>
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