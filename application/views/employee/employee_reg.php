<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  $this->load->view('common/header.php');
  ?>
  <title>Registration</title>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('common/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('common/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- content -->
          <form action="<?php echo base_url('index.php/employee/employee_reg/employeeRegProcess') ?>" method="POST">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                  <div class="card-header">
                    <div class="col-sm-6">
                      <?php if ($this->session->flashdata('success')) { ?>
                        <div class="row hideme fadeout">
                          <div class="col-md-12">
                            <p class="alert alert-success"><?php echo $this->session->flashdata('success') ?></p>
                          </div>
                        </div>
                      <?php } ?>
                      <?php if ($this->session->flashdata('error')) { ?>
                        <div class="row hideme fadeout">
                          <div class="col-md-12">
                            <p class="alert alert-error"><?php echo $this->session->flashdata('error') ?></p>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    <h4 style="padding-left: 190px;"><strong>EMPLOYEE REGISTRATION</strong></h4>
                  </div><br>
                  <div class="row col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><strong>Name with Initials</strong></label>
                        <input type="text" class="form-control bdr-color" placeholder="Name with Initials*" value="" name="namewithinitial" />
                      </div>
                      <div>
                        <label>
                          <strong>Gender</strong>
                        </label>
                        <select name="gender" id="gender" class="form-control">
                          <option value="" selecteddisable>Select Gender</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="comment"><strong>Address</strong></label>
                        <textarea class="form-control  bdr-color" rows="5" name="address" id="address"></textarea>
                      </div>
                      <div class="form-group">
                        <label><strong>Password</strong></label>
                        <input type="password" class="form-control bdr-color" placeholder="Password*" name="password" />
                      </div>
                      <div class="form-group">
                        <label><strong>Confirm Password</strong></label>
                        <input type="password" class="form-control bdr-color" placeholder="Confirm Password*" name="password" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>
                          <strong>Date of Birth</strong>
                        </label>
                        <input type="date" name="dateofbirth" class="form-control  bdr-color" placeholder="MM/DD/YYYY" value="memberdbo" id="dob" />
                      </div>
                      <div class="form-group">
                        <label><strong>NIC</strong></label>
                        <input type="text" minlength="12" maxlength="12" name="nic" class="form-control  bdr-color" placeholder="NIC*" value="" />
                      </div>

                      <div>
                        <label><strong>Designation</strong></label>
                        <select name="designation" id="designation" class="form-control">
                          <option value="" selecteddisable>Select Designation</option>
                          <option value="1">Chairman</option>
                          <option value="2">Manager</option>
                          <option value="3">Employee</option>
                        </select>
                      </div><br>
                      <div class="form-group">
                        <label><strong>Mobile Number</strong></label>
                        <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control  bdr-color" placeholder="Your Phone *" value="" />
                      </div>
                      <div> <label><strong>Role</strong></label>
                        <select name="role_id" id="role_id" class="form-control">
                          <option value="" selecteddisable>Select Role</option>
                          <option value="1">Admin</option>
                          <option value="2">Operater</option>
                          <option value="3">staff</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group">
                        <label><strong>Username</strong></label>
                        <input type="text" name="username" class="form-control  bdr-color" placeholder="Username*" />
                      </div>
                      <br>


                    </div>
                  </div>
                  <div class="col-md-12 row">
                    <div class="col-md-6">
                      <input type="reset" class="btn btn-primary btn-user btn-block" value="Clear" />
                    </div>
                    <div class="col-md-6">
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Add" />
                    </div>
                  </div>

                </div>
          </form>
          <div class="col-md-2"></div>
        </div>

        <!-- content -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php
    $this->load->view('common/footer.php');
    ?>


  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <?php $this->load->view('common/scripts.php'); ?>


</body>

</html>