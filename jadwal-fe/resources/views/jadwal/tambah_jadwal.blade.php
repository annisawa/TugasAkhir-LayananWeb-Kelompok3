@extends('layout.main')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Jadwal Belajar Mengajar</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/jadwal">Data Jadwal Belajar Mengajar</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Jadwal Belajar Mengajar</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Jadwal Belajar Mengajar</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Guru :</label>
                          <div class="col-sm-12">
                            <select name="id_guru" class="form-control">
                              <option>-- Pilih Guru --</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Mapel :</label>
                          <div class="col-sm-12">
                            <select name="id_kelas" class="form-control">
                              <option>-- Pilih Mapel --</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Kelas :</label>
                          <div class="col-sm-12">
                            <select name="id_kelas" class="form-control">
                              <option>-- Pilih Kelas --</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tanggal :</label>
                          <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Hari :</label>
                          <div class="col-sm-12">
                            <select class="form-control" name="hari" />
                              <option>Senin</option>
                              <option>Selasa</option>
                              <option>Rabu</option>
                              <option>Kamis</option>
                              <option>Jumat</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jam :</label>
                          <div class="col-sm-12">
                            <select class="form-control" name="jam" />
                              <option>07.00-07.45</option>
                              <option>07.45-08.30</option>
                              <option>08.30-09.15</option>
                              <option>09.15-09.30</option>
                              <option>09.30-10.15</option>
                              <option>10.15-11.00</option>
                              <option>11.00-11.45</option>
                              <option>11.45-12.15</option>
                              <option>12.15-13.00</option>
                              <option>13.00-13.45</option>
                              <option>13.45-14.30</option>
                              <option>14.30-15.15</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md" name="simpan">Simpan</button>
                    <a href="javascript:history.back()" class="btn btn-danger btn-md">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
@endsection('content')