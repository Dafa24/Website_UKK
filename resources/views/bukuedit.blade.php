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
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="#"><img src="assets/images/logo-mini.png" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
            </button>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  </a>
                  <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src={{ asset ("assets/images/faces/face4.jpg")}} alt="" class="profile-pic" />
                      </div>
              <li class="nav-item dropdown d-none d-sm-flex">
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> Indonesian </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> English </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src={{ asset ("assets/images/faces/face9.jpg")}} />
                  <span class="profile-name">Dafa P</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                
                  <a class="dropdown-item" href="/logout">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Keluar </a>
                </div>
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
              <h3 class="mb-0"> Hi, Albiyana Akbar Dafa Pradipa! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Have a nice day!.</span>
              </h3>
              
            </div>

            <div class="col-mb-12">
              <div class="card">
                <div class="card-header">
                  From Edit Buku
                </div>
                <div class="card-body">
                  <!-- daftar buku -->
                  <div class="card">
    <div class="card-body">
    <form action="{{url('buku-update/'.$data_buku->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="judul" value="{{$data_buku->judul}}">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" name="gambar" value="{{$data_buku->gambar}}">
        <small>*Kosongkan, jika tidak ingin mengubah gambar</small>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pengarang</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="pengarang"value="{{$data_buku->pengarang}}">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penerbit</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="penerbit"value="{{$data_buku->penerbit}}">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Usia</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="usia"value="{{$data_buku->usia}}">
        </div>
    </div>
    <br><br>
    <div class="col-sm-10" style="padding: 0px 250px">
    <button type="submit" class="btn btn-primary" align="right">Kirim</button>
    </div>
    </form>
    </div>
</div>
<br><br>
<a href="/"><button type="button" class="btn btn-warning">Kembali</button></a><br><br><br>
            
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © intandewihapsari 2021</span>
              
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset ('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset ('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset ('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset ('assets/vendors/flot/jquery.flot.pie.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset ('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset ('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset ('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset ('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>