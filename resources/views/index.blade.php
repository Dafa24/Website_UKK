<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Toko Buku Online</title>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/vendors/flag-icon-css/css/flag-icon.min.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/css/vendor.bundle.base.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css' ) }}"/>
    <link rel="shortcut icon" href="{{ asset ('assets/images/tbonline.png' ) }}"/>
  </head>
  <body>
    <div class="container-scroller">
      </div>
      <div class="logo">
          <img src="assets/images/tbonline.png" width="217" height="170" align = "left">
      </div>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
                </ul>
              </div>
            </div>
          </li>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR KUPINTAR</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER KUPINTAR</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-20 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items stretch-content">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="#"><img src="assets/images/logo-mini.png" alt="logo" /></a>
            <ul class="navbar-nav">
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="" data-toggle="">
                  <i class="mdi mdi-earth"></i> Indonesian </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face9.jpg" />
                  <span class="profile-name">Dafa P</span>
                </a>
                  <a class="btn btn-sm ml-3 btn-warning" href="/logout"> Keluar </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, Albiyana Akbar Dafa Pradipa! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Have a nice day!</span>
              </h3>

                </div>
              <div class="d-flex">
                <a href="/buku-create"><button type="button" class="btn btn-sm ml-3 btn-warning"> Tambahkan Buku </button></a>
              </div>
              <form class="nav-link form-inline mt-2 mt-md-0">
                  @csrf
                  <div class="input-group">
                    <input type="text" id="myInput" class="form-control" placeholder="Cari Buku" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myCard div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        </script>
            </div>

            <div class="col-mb-12">
              <div class="card">
                <div class="card-header">
                  Daftar Buku
                </div>
                <div class="card-body">
                  <!-- daftar buku -->
                  <div class="row row-cols-1 row-cols-md-2 g-4" id="myCard">
                  @foreach($data_buku as $buku)
                    <div class="col">
                      <div class="card">
                        <div class="row g-0">
                          <div class="col-md-8">
                            <div class="card-body">
                            <img src="images/{{$buku->gambar}}" class="img-fluid" width="250px" height="200px" alt="...">
                              <h5 class="card-title">{{$buku->judul}}</h5>
                              <p class="card-text">Pengarang : {{$buku->pengarang}}</p>
                              <p class="card-text">Penerbit: {{$buku->penerbit}}</p>
                              <p class="card-text">Usia : {{$buku->usia}}</p>
                              <a href="{{ url('buku-delete/'.$buku->id) }}" onclick="return confirm('Yakin Menghapus data ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                              <a href="{{ url('buku-edit/'.$buku->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                          </div>
                        </div>
                      </div>
                      </div>
                      <br>
                    </div>
                    @endforeach

                  </div>
                </div>
              </div>
            </div>

            <!--   <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/images/alphabet.jpg" class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">ALPHABET</h5>
        <p class="card-text">Pengarang: Nia Rustiana</p>
         <p class="card-text">Penerbit : Susi Lusmita</p>
         <p class="card-text">Usia : 3-6</p>
         <button type="button" class="btn btn-danger">Hapus</button>
<button type="button" class="btn btn-info">Edit</button>
      </div>
    </div>
  </div> -->
            
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>