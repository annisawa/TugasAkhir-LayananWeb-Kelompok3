@extends('layout.main')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Pembagian Kelas Siswa</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/pembagiankelas">Data Pembagian Kelas Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data Pembagian Kelas Siswa</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Data Pembagian Kelas Siswa</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">ID Siswa :</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_siswa" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nama Siswa :</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_siswa" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Jurusan :</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_siswa" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Kelas :</label>
                          <div class="col-sm-12">
                            <select name="kelas" class="form-control">
                              <option>-- Pilih Kelas --</option>
                              <option>X-RPL 1</option>
                              <option>X-RPL 2</option>
                              <option>X-RPL 3</option>
                              <option>XI-RPL 1</option>
                              <option>XI-RPL 2</option>
                              <option>XI-RPL 3</option>
                              <option>XII-RPL 1</option>
                              <option>XII-RPL 2</option>
                              <option>XII-RPL 3</option>
                              <option>X-AP 1</option>
                              <option>X-AP 2</option>
                              <option>X-AP 3</option>
                              <option>XI-AP 1</option>
                              <option>XI-AP 2</option>
                              <option>XI-AP 3</option>
                              <option>XII-AP 1</option>
                              <option>XII-AP 2</option>
                              <option>XII-AP 3</option>
                              <option>X-TSM 1</option>
                              <option>X-TSM 2</option>
                              <option>X-TSM 3</option>
                              <option>XI-TSM 1</option>
                              <option>XI-TSM 2</option>
                              <option>XI-TSM 3</option>
                              <option>XII-TSM 1</option>
                              <option>XII-TSM 2</option>
                              <option>XII-TSM 3</option>
                              <option>X-TKR 1</option>
                              <option>X-TKR 2</option>
                              <option>X-TKR 3</option>
                              <option>XI-TKR 1</option>
                              <option>XI-TKR 2</option>
                              <option>XI-TKR 3</option>
                              <option>XII-TKR 1</option>
                              <option>XII-TKR 2</option>
                              <option>XII-TKR 3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md" name="ubah">Simpan</button>
                    <a href="javascript:history.back()" class="btn btn-danger btn-md">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

@endsection('content')