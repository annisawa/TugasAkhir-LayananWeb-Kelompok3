@extends('layout.main-peserta')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Pendaftaran Peserta Didik Baru</h3>
                            <br>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <h2>Data hanya dapat di input sekali, mohon pastikan data terisi dengan benar !!</h2>
                    <h2>Jika ada kesalahan, harap hubungi admin.</h2>
                    <form class="" action="/admin-peserta" method="post">
                        @csrf @method('post')
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-edit"></i> <small>Data Siswa</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">NISN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder="NISN" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">NIK<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik" placeholder="NIK" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Nama Lengkap" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Jenis Kelamin<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="radio" required="required" name="jk" value="L" /> Laki-Laki
                                                &nbsp;&nbsp;
                                                <input type="radio" required="required"  name="jk" value="P" /> Perempuan
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Tempat Lahir<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tempat_lahir" placeholder="Tempat Lahir" required="required" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Tanggal Lahir<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input class="form-control date" type="date" name="tgl_lahir" placeholder="NIK" required="required" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Agama<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="agama">
                                                    <option>-- Pilih Agama --</option>
                                                    <option>Islam</option>
                                                    <option>Katolik</option>
                                                    <option>Kristen</option>
                                                    <option>Hindu</option>
                                                    <option>Budha</option>
                                                    <option>Konghuchu</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">No HP<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="no_hp" placeholder="No HP" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="email" class="form-control" data-validate-length-range="6" data-validate-words="2"  name="email" placeholder="Email" required="required" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Alamat<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required" />
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
                                    <h2><i class="fa fa-edit"></i> <small>Data Orang Tua</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">NIK Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik_ayah" placeholder="NIK Ayah" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">NIK Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik_ibu" placeholder="NIK Ibu" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nama Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_ayah" placeholder="Nama Ayah" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nama Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_ibu" placeholder="Nama Ibu" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Pendidikan Ayah<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="pendidikan_ayah">
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
                                                    <option>-- Pilih Pekerjaan --</option>
                                                    <option>Ibu Rumah Tangga</option
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
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2"  name="nohp_ayah" placeholder="No HP Ayah" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">No HP Ibu<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" name="nohp_ibu" placeholder="No HP Ibu" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
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
                                    <h2><i class="fa fa-edit"></i> <small>Data Sekolah</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">NPSN<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="npsn" placeholder="NPSN" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Nama Sekolah<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" placeholder="Nama Sekolah" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Status Sekolah<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="status">
                                                    <option>-- Pilih Status Sekolah --</option>
                                                    <option>Negeri</option>
                                                    <option>Swasta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="alamat_sekolah" placeholder="Alamat" required="required" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Tahun Lulus<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="tahun_lulus" placeholder="Tahun Lulus" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57"/>
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
                                    <h2><i class="fa fa-edit"></i> <small>Data Nilai</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 1<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file"  name="raport_smt1" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 2<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file" name="raport_smt2" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 3<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file"  name="raport_smt3" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 4<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file" name="raport_smt4" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai Raport Semester 5<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file"  name="raport_smt5" required="required"/>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Nilai USBN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="file" name="usbn" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nilai UN<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
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
                                    <h2><i class="fa fa-edit"></i> <small>Pilih Jurusan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Jurusan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="jurusan">
                                                    <option>-- Pilih Jurusan --</option>
                                                    <option>Rekayasa Perangkat Lunak</option>
                                                    <option>Administrasi Perkantoran</option>
                                                    <option>Teknik Sepeda Motor</option>
                                                    <option>Teknik Kendaraan Ringan</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="bukti" value="-">
                                            <input type="hidden" name="status_pembayaran" value="Belum Bayar">
                                            <input type="hidden" name="keterangan" value="Peserta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-3 offset-md-5">
                                    <br>
                                    <button type='submit' class="btn btn-primary">Submit</button>
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