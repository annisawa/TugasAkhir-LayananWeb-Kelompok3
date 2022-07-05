@extends('layout.main')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="card">
                <div>
                  <center>
                    <h3><b>Selamat Datang Admin</b></h3>
                    <br>
                    <img src="img/logo.png" width="100">
                    <br>
                    <br>
                    <p>Semoga Harimu Menyenangkan :)</p>
                  </center>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>

@endsection('content')