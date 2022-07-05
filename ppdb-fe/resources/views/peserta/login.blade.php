<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB | Login</title>
  <link rel="icon" href="asset2/img/logo-smk.png">
  <link rel="stylesheet" href="asset2/styles/style.css">
  <link rel="stylesheet" href="asset2/styles/responsive.css">
  <link rel="stylesheet" href="asset2/styles/style-2.css">

  <style>
    body {
      height: auto;
      background: #F8F8FA;
    }

    .location {
      background-color: #C9EC71;
    }

    #myTopnav {
      box-shadow: none;
      border-bottom: none;
      background-color: unset
    }

    .topnav a {
      color: #000
    }

    #txt,
    #txt1,
    #txt2,
    #txt3 {
      color: #000
    }

    .section-jual {
      display: grid;
      grid-template-columns: 60% 40%;
      margin-bottom: 3em;
      margin-top: 3em;
    }

    .img-vector {
      max-width: 100%;
      margin-left: 10%;
    }

    .progress-jual {
      margin: 4.5em 5% 3.5em 5%;
    }

    .btn-jual,
    .btn-cancel {
      width: 70%;
      margin-left: 0;
      padding: 0 10%;
      font-size: 1rem
    }

    .question-login {
      margin-top: 1em;
      margin-bottom: 1em;
      text-align: center;
      display: block
    }

    @media only screen and (max-width: 900px) {
      .section-jual {
        grid-template-columns: 50% 50%;
      }

      .img-vector {
        margin-left: 0;
        margin-top: 20%;
      }
    }

    @media only screen and (max-width: 751px) {
      .section-jual {
        display: block
      }

      .img-vector {
        margin-left: 0;
        margin-top: 0%;
      }
    }

    @media only screen and (min-width: 750px) {
      .section-jual {
        margin-bottom: 10em;
        margin-top: 3em;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="topnav" id="myTopnav">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <svg width="23" height="20">
        <path d="M0,5 22,5" stroke="#000" stroke-width="3" />
        <path d="M4,11 22,11" stroke="#000" stroke-width="3" />
        <path d="M8,17 22,17" stroke="#000" stroke-width="3" />
      </svg>
    </a>
    <img src="asset2/img/logo3.png" id="logo">
    <div class="nav-menu">
      <a href="/peserta-home">Beranda</a>
      <a href="/peserta-register">Register</a>
      <a style="color: #2155cd">Login</a>
    </div>
  </div>

  <!-- FormContent -->
  <div class="section-jual">
    <!-- OnStep -->
    <div class="progress-jual">
      <img src="asset2/img/login.png" class="img-vector2">
    </div>

    <!-- FormContent -->
    <div class="form-login">
      <div class="center">
        <h1>LOGIN</h1>
      </div>
      <br>
      <label>Email</label>
      <input type="text" class="date-jual">
      <br>
      <label>Password</label>
      <input type="text" class="date-jual">
      <br>
      <div style="text-align: center;">
        <a class="btn-jual" href="/peserta-dashboard">Login</a>
      </div>
      <label class="question-login" style="font-weight: 300">Tidak punya akun ?</label>
      <div style="text-align: center">
        <a class="btn-cancel" href="/peserta-register">Register</a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer" id="tentang">
    <div class="section-footer">
      <div class="content-footer">
        <div class="about-footer column-footer">
          <img class="img-footer" src="asset2/img/logo-footer.png" alt="">
              <p class="field-footer">
                PPDB Online merupakan aplikasi berbasis web yang bertujuan untuk membantu
                        siswa daftar sekolah di SMK Cendikia.
              </p>
        </div>
        <div class="contact-footer">
            <p class="title-link" style="text-transform: uppercase; text-align: left"><b>Visi SMK Cendikia</b>
            </p>
            <p class="contact-footfield">
              One Heart, One Vision, To be Number One.
            </p>
        </div>
        <div class="column-footer">
          <p class="title-link" style="text-transform: uppercase"><b>Lainnya</b></p>
          <p class="child-link"><a href="/peserta-login">Login</a></p>
          <p class="child-link"><a href="/peserta-register">Register</a></p>
        </div>
        <div class="contact-footer">
          <p class="title-link" style="text-transform: uppercase; text-align: left"><b>Kontak & Informasi</b>
          </p>
          <p class="contact-footfield">
             Kp. Cihaur Rt. 09 Rw. 02, Arjasari, Kec. Leuwisari, Kab. Tasikmalaya Prov. Jawa Barat
            <br><br>
            Email : smkcendikia@gmail.com
            <br>
            Telepon : (021)332-376
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Script -->
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("myTopnav").style.background = "#fff";
      document.getElementById("myTopnav").style.boxShadow = "0 0 10px rgba(0, 0, 0, 0.1)";
      document.getElementById("myTopnav").style.borderBottom = "2px solid rgb(214, 210, 210)";

      document.getElementById("txt").style.color = "#000";
      document.getElementById("txt1").style.color = "#000";
      document.getElementById("txt2").style.color = "#000";
      document.getElementById("txt3").style.color = "#000";
    } else {
      document.getElementById("myTopnav").style.background = "transparent";
      document.getElementById("myTopnav").style.boxShadow = "none";
      document.getElementById("myTopnav").style.borderBottom = "none";

      document.getElementById("txt").style.color = "#fff";
      document.getElementById("txt1").style.color = "#fff";
      document.getElementById("txt2").style.color = "#fff";
      document.getElementById("txt3").style.color = "#fff";
    }

    document.getElementById("txt").onmouseover = function () { mouseOver() };
    document.getElementById("txt").onmouseout = function () { mouseOut() };

    document.getElementById("txt1").onmouseover = function () { mouseOver1() };
    document.getElementById("txt1").onmouseout = function () { mouseOut1() };

    document.getElementById("txt2").onmouseover = function () { mouseOver2() };
    document.getElementById("txt2").onmouseout = function () { mouseOut2() };

    document.getElementById("txt3").onmouseover = function () { mouseOver3() };
    document.getElementById("txt3").onmouseout = function () { mouseOut3() };

    // scroll > 80
    // mouseOver
    function mouseOver() {
      document.getElementById("txt").style.color = "#2155cd";
    }

    function mouseOver1() {
      document.getElementById("txt1").style.color = "#2155cd";
    }

    function mouseOver2() {
      document.getElementById("txt2").style.color = "#2155cd";
    }

    function mouseOver3() {
      document.getElementById("txt3").style.color = "#2155cd";
    }
    // mouseOut
    function mouseOut() {
      document.getElementById("txt").style.color = "#000";
    }

    function mouseOut1() {
      document.getElementById("txt1").style.color = "#000";
    }

    function mouseOut2() {
      document.getElementById("txt2").style.color = "#000";
    }

    function mouseOut3() {
      document.getElementById("txt3").style.color = "#000";
    }

    // scroll < 80
    // mouseOver
    function mouseOverblack() {
      document.getElementById("txt").style.color = "#2155cd";
    }

    function mouseOverblack1() {
      document.getElementById("txt1").style.color = "#2155cd";
    }

    function mouseOverblack2() {
      document.getElementById("txt2").style.color = "#2155cd";
    }

    function mouseOverblack3() {
      document.getElementById("txt3").style.color = "#2155cd";
    }
    // mouseOut
    function mouseOutblack() {
      document.getElementById("txt").style.color = "#fff";
    }

    function mouseOutblack1() {
      document.getElementById("txt1").style.color = "#fff";
    }

    function mouseOutblack2() {
      document.getElementById("txt2").style.color = "#fff";
    }

    function mouseOutblack3() {
      document.getElementById("txt3").style.color = "#fff";
    }
  }
</script>

</html>