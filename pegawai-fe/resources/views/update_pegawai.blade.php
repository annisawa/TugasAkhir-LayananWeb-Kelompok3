@extends('layout.main')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ubah Data</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form class="" action="/pegawai/view/{{$pass['id']}}" method="post" novalidate>
                        @csrf @method('put')
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-edit"></i> <small>Data Pribadi</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">NIP<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nip" placeholder="NIP" required="required" value="{{$pass['datapribadi']['nip']}}" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">NIK<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nik" placeholder="NIK" required="required" value="{{$pass['datapribadi']['nik']}}" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Nama Lengkap" value="{{$pass['datapribadi']['nama']}}" required="required" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Jenis Kelamin<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select class="form-control" name="jk">
                                                    <option value="{{$pass['datapribadi']['jk']}}">{{$pass['datapribadi']['jk']}}</option>
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
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$pass['datapribadi']['tempat_lahir']}}" required="required" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Tanggal Lahir<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input class="form-control date" type="date" value="{{$pass['datapribadi']['tgl_lahir']}}" name="tgl_lahir" placeholder="NIK" required="required" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Status Pernikahan<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <select name="status" class="form-control">
                                                    <option value="{{$pass['datapribadi']['status']}}">{{$pass['datapribadi']['status']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Status Pernikahan --</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">No HP<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="no_hp" placeholder="No HP" value="{{$pass['datapribadi']['no_hp']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-2 col-sm-2 label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="email" class="form-control" data-validate-length-range="6" data-validate-words="2"  name="email" placeholder="Email" value="{{$pass['datapribadi']['email']}}" required="required" />
                                            </div>
                                            <label class="col-md-2 col-sm-2 label-align">Alamat<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$pass['datapribadi']['alamat']}}" required="required" />
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
                                    <h2><i class="fa fa-edit"></i> <small>Riwayat Pendidikan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Pendidikan Terakhir<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="pendidikan_terakhir">
                                                    <option value="{{$pass['datapribadi']['pendidikan_terakhir']}}">{{$pass['datapribadi']['pendidikan_terakhir']}}</option>
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
                                            <label class="col-md-3 col-sm-3 label-align">Nama Sekolah<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tempat_pendidikan" placeholder="Nama Sekolah atau Perguruan Tinggi" value="{{$pass['datapribadi']['tempat_pendidikan']}}" required="required"/>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Tahun Masuk<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" name="tahun_masuk" placeholder="Tahun Masuk" value="{{$pass['datapribadi']['tahun_masuk']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Tahun Lulus<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="tahun_lulus" placeholder="Tahun Lulus" value="{{$pass['datapribadi']['tahun_lulus']}}" required="required" onkeypress="return event.charCode>=48 && event.charCode<=57" />
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
                                    <h2><i class="fa fa-edit"></i> <small>Data Pegawai</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Jabatan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="jabatan">
                                                    <option value="{{$pass['jabatan']}}">{{$pass['jabatan']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Jabatan --</option>
                                                    <option>Kepala Sekolah</option>
                                                    <option>Wakasek</option>
                                                    <option>Tata Usaha</option>
                                                    <option>Operator Sekolah</option>
                                                    <option>Guru Mata Pelajaran</option>
                                                    <option>Satpam</option>
                                                    <option>Pembantu Sekolah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Pangkat<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="pangkat">
                                                    <option value="{{$pass['pangkat']}}">{{$pass['pangkat']}}</option>
                                                    <option></option>
                                                    <option>-- Pilih Pangkat --</option>
                                                    <option>PNS</option>
                                                    <option>Honorer</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Gaji Pokok<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="gaji_pokok">
                                                    <option value="{{$pass['gaji_pokok']}}">{{$pass['gaji_pokok']}}</option>
                                                    <option>-- Pilih Gaji Pokok --</option>
                                                    <option>< 500rb</option>
                                                    <option>500rb - 1 jt</option>
                                                    <option>1jt- 3jt</option>
                                                    <option>3jt - 6jt</option>
                                                    <option>> 6jt</option>
                                                </select>
                                        </div>
                                        </div>
                                        <div class="row field item form-group">
                                            <label class="col-md-3 col-sm-3 label-align">Sumber Gaji<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="sumber_gaji">
                                                    <option value="{{$pass['sumber_gaji']}}">{{$pass['sumber_gaji']}}</option>
                                                    <option></option>
                                                    <option>-- Sumber Gaji --</option>
                                                    <option>Sekolah</option>
                                                    <option>Negara</option>
                                                </select>
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

