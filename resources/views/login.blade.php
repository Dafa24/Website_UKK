<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Toko Buku Online Login</title>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/vendors/flag-icon-css/css/flag-icon.min.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/css/vendor.bundle.base.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css' ) }}"/>
    <link rel="shortcut icon" href="{{ asset ('assets/images/tbonline.png' ) }}"/>
  </head>
  <body>
  <div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Login Toko Buku Online</h4>
                    <form class="forms-sample"action="{{url('auth-login')}}" method="post" >
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kata Sandi</label>
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi" />
                      </div>
                      @if ($message = Session::get('sukses'))
                      <div class="alert alert-success alert-block">
                      <a href="/login"><button type="button" class="close" data-dismiss="alert">×</button></a>
                      <strong>{{ $message }}</strong>
                      </div>
                      @endif

                       @if ($message = Session::get('gagal'))
                      <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                      </div>
                      @endif
                      <button type="submit" class="btn btn-primary mr-2"> Masuk </button>
                    </form>
                    
                  </div>
                </div>
              </div> 
            </div>
          </div>
  </body>
        </div>
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