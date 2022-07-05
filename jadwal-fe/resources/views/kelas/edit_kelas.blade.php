@extends('layout.main')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/kelas">Data Kelas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data Kelas</li>
            </ol>
          </div>
           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Data Kelas</h6>
                </div>
                <div class="card-body">
                  <form method="POST" action="/kelas/{{$pass['id']}}">
                    @csrf @method('put')
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Kelas :</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="kelas" value="{{$pass['kelas']}}" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="javascript:history.back()" class="btn btn-danger btn-md">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
                    
@endsection('content')



    

   