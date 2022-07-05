@extends('layout.main-admin')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ubah Data Peserta Didik Baru</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="/admin-peserta/{{$pass['id']}}" method="post" novalidate>
                        @csrf @method('put')
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-user"></i> <small>Data Siswa</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">NISN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder="NISN" value="{{$pass['siswa']['nisn']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">NIK<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik" placeholder="NIK" value="{{$pass['siswa']['nik']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Nama Lengkap" value="{{$pass['siswa']['nama']}}" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Jenis Kelamin<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="jk">
                                                    <option value="{{$pass['siswa']['jk']}}">{{$pass['siswa']['jk']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Tempat Lahir<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$pass['siswa']['tempat_lahir']}}" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Tanggal Lahir<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input class="form-control date" type="date" name="tgl_lahir" placeholder="NIK" value="{{$pass['siswa']['tgl_lahir']}}" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Agama<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="agama">
                                                    <option value="{{$pass['siswa']['agama']}}">{{$pass['siswa']['agama']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Agama --</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghuchu">Konghuchu</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">No HP<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="no_hp" placeholder="No HP" value="{{$pass['siswa']['no_hp']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="email" class="form-control" data-validate-length-range="6" data-validate-words="2"  name="email" placeholder="Email" value="{{$pass['siswa']['email']}}" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Alamat<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$pass['siswa']['alamat']}}" required="required"/>
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
                                            <label class="col-md-2 col-sm-2 label-align">NIK Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik_ayah" placeholder="NIK Ayah" value="{{$pass['ortu']['nik_ayah']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">NIK Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik_ibu" placeholder="NIK Ibu" value="{{$pass['ortu']['nik_ibu']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nama Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_ayah" placeholder="Nama Ayah" value="{{$pass['ortu']['nama_ayah']}}" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nama Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_ibu" placeholder="Nama Ibu" value="{{$pass['ortu']['nama_ibu']}}" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Pendidikan Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="pendidikan_ayah">
                                                    <option value="{{$pass['ortu']['pendidikan_ayah']}}">{{$pass['ortu']['pendidikan_ayah']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Pendidikan --</option>
                                                    <option>Tidak Sekolah</option>
                                                    <option>SD/MI</option>
                                                    <option>SMP/MTS</option>
                                                    <option>SMA/MA/SMK</option>
                                                    <option>Diploma</option>
                                                    <option>Sarjana</option>
                                                    <option>Magister</option>
                                                    <option>Doctor</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Pendidikan Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="pendidikan_ibu">
                                                    <option value="{{$pass['ortu']['pendidikan_ibu']}}">{{$pass['ortu']['pendidikan_ibu']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Pendidikan --</option>
                                                    <option>Tidak Sekolah</option>
                                                    <option>SD/MI</option>
                                                    <option>SMP/MTS</option>
                                                    <option>SMA/MA/SMK</option>
                                                    <option>Diploma</option>
                                                    <option>Sarjana</option>
                                                    <option>Magister</option>
                                                    <option>Doctor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Pekerjaan Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="pekerjaan_ayah">
                                                    <option value="{{$pass['ortu']['pekerjaan_ayah']}}">{{$pass['ortu']['pekerjaan_ayah']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Pekerjaan --</option>
                                                    <option>Buruh</option>
                                                    <option>Petani</option>
                                                    <option>Wiraswasta</option>
                                                    <option>PNS</option>
                                                    <option>TNI / Polri</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Pekerjaan Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="pekerjaan_ibu">
                                                    <option value="{{$pass['ortu']['pekerjaan_ibu']}}">{{$pass['ortu']['pekerjaan_ibu']}}</option>
                                                    <option>-- Pilih Pekerjaan --</option>
                                                    <option>IRT</option>
                                                    <option>Buruh</option>
                                                    <option>Petani</option>
                                                    <option>Wiraswasta</option>
                                                    <option>PNS</option>
                                                    <option>TNI / Polri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Penghasilan Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="penghasilan_ayah">
                                                    <option value="{{$pass['ortu']['penghasilan_ayah']}}">{{$pass['ortu']['penghasilan_ayah']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Penghasilan --</option>
                                                    <option>0</option>
                                                    <option>< 500rb</option>
                                                    <option>500rb - 1 jt</option>
                                                    <option>1jt- 5jt</option>
                                                    <option>5jt - 10jt</option>
                                                    <option>> 10jt</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Penghasilan Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="penghasilan_ibu">
                                                    <option value="{{$pass['ortu']['penghasilan_ibu']}}">{{$pass['ortu']['penghasilan_ibu']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Penghasilan --</option>
                                                    <option>0</option>
                                                    <option>< 500rb</option>
                                                    <option>500rb - 1 jt</option>
                                                    <option>1jt- 5jt</option>
                                                    <option>5jt - 10jt</option>
                                                    <option>> 10jt</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">No HP Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2"  name="nohp_ayah" placeholder="No HP Ayah" value="{{$pass['ortu']['nohp_ayah']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">No HP Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" name="nohp_ibu" placeholder="No HP Ibu" value="{{$pass['ortu']['nohp_ibu']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
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
                                            <label class="col-md-3 col-sm-3 label-align">NPSN<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="npsn" placeholder="NPSN" value="{{$pass['sekolah']['npsn']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Nama Sekolah<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" placeholder="Nama Sekolah" value="{{$pass['sekolah']['nama_sekolah']}}" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Status Sekolah<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="status">
                                                    <option value="{{$pass['sekolah']['status']}}">{{$pass['sekolah']['status']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Status Sekolah --</option>
                                                    <option>Negeri</option>
                                                    <option>Swasta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$pass['sekolah']['alamat']}}" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Tahun Lulus<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="tahun_lulus" placeholder="Tahun Lulus" required="required" value="{{$pass['sekolah']['tahun_lulus']}}" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
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
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 1<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['raport_smt1']}}</label>&nbsp;&nbsp;
                                                <input type="file"  name="raport_smt1" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 2<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['raport_smt2']}}</label>&nbsp;&nbsp;
                                                <input type="file" name="raport_smt2" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 3<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['raport_smt3']}}</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file"  name="raport_smt3" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 4<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['raport_smt4']}}</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file" name="raport_smt4" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 5<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['raport_smt5']}}</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file"  name="raport_smt5" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai USBN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['usbn']}}</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file" name="usbn" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai UN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <label>{{$pass['nilai']['un']}}</label>&nbsp;&nbsp;&nbsp;
                                                <input type="file"  name="un" required="required"/>
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
                                            <label class="col-md-3 col-sm-3 label-align">Jurusan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="jurusan">
                                                    <option value="{{$pass['jurusan']['jurusan']}}">{{$pass['jurusan']['jurusan']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Jurusan --</option>
                                                    <option>Rekayasa Perangkat Lunak</option>
                                                    <option>Administrasi Perkantoran</option>
                                                    <option>Teknik Sepeda Motor</option>
                                                    <option>Teknik Kendaraan Ringan</option>
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
                                    <a href="/admin-peserta" class="btn btn-primary">Back</a>
                                    <button type='submit' class="btn btn-danger">Submit</button>
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