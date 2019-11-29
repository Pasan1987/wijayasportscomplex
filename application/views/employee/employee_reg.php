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

    <?php $this->load->view('common/sidebar.php');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

            <?php $this->load->view('common/navbar.php');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <!-- content -->
         <form action = "<?php echo base_url('index.php/employee/employee_reg/employeeRegProcess')?>" method = "POST">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>EMPLOYEE REGISTRATION</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Name with Initials</strong></label>
                                <input type="text" class="form-control bdr-color" placeholder="Name with Initials*" value="" name = "namewithiniial" />
                            </div>
                           
                            <div>
                            <label><strong>Select</strong></label>
                            <select name="gender" id= "gender" class="form-control">
                               <option value="" selecteddisable>Select Gender</option>
                               <option value="1">Male</option>
                               <option value="2">Female</option> 
                            </select>
                         </div><br>

                            <div class="form-group">
                             <label for="comment"><strong>Address</strong></label>
                              <textarea class="form-control  bdr-color" rows="6" name = "address" id="address"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label><strong>Date of Birth</strong></label>
                                <input type="text" name="dateofbirth" class="form-control  bdr-color" placeholder="DD/MM/YYYY *" value="" id="dob"  />
                            </div>
                            <div class="form-group">
                            <label><strong>NIC</strong></label>
                                <input type="text" minlength="10" maxlength="10" name="nic" class="form-control  bdr-color" placeholder="Your Phone *" value="" />
                            </div>
                            <div>
                            <label><strong>Designation</strong></label>
                            <select name="designation" id= "designation" class="form-control">
                               <option value="" selecteddisable>Select Gender</option>
                               <option value="1">Chairman</option>
                               <option value="2">Manager</option> 
                               <option value="3">Employee</option>
                            </select>
                         </div><br>
                            <div class="form-group">
                                <label><strong>Mobile Number</strong></label>
                                <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control  bdr-color" placeholder="Your Phone *" value="" />
                            </div>
    
                  
                            
                    </div>
                </div>
                <div class="col-md-12 row">
                <div class="col-md-6">
                <input type="reset" class="btn btn-primary btn-user btn-block" value="reset" />
                </div>
                <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" />
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
<?php $this->load->view('common/scripts.php');?>


</body>

</html>



