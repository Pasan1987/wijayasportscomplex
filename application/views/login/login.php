<!DOCTYPE html>
<html lang="en">

<head>

 <?php
    $this->load->view('common/header.php');
 ?>
 <title>Test 1234 </title>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-0 col-lg-0 col-md-0">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body  d-none d-lg-block bg-login -->
            <div class="row">
              <div class="col-lg-6 ">
              </div>
              <div class="col-lg-0">
                <div class="p-5" style="padding-right: 28px !important">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Wijaya Sports Complex</h1>
                  </div>
                  <div style="padding-left: 25px;">
                  <img src="/git/wijayasportscomplex/assests/img/logo2.jpg" width="200" height="150">
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="User name...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <a href="<?php echo base_url() ?>index.php/dashboard/dashboard/dashboardcontrol" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- </div> -->

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assests/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assests/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assests/js/sb-admin-2.min.js"></script>

</body>

</html>
