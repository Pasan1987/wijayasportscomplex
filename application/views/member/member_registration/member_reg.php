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
         <form action = "<?php echo base_url('index.php/member/member_registration/Registration/memberRegprocess')?>" method = "POST">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>MEMBER REGISTRATION</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>First Name</strong></label>
                                <input type="text" class="form-control bdr-color" placeholder="First Name *" value="" id="firstname" value="" Name="firstname" />
                            </div>
                            <div class="form-group">
                                <label><strong>Date of Birth</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="DD/MM/YYYY *" id="dateofbirth" value="" Name = "dob" />
                            </div>

                            <div class="form-group">
                             <label for="comment"><strong>Address</strong></label>
                              <textarea class="form-control  bdr-color" rows="6" id="address" name="address"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label><strong>Last Name</strong></label>
                                <input type="text" class="form-control  bdr-color" placeholder="Last Name *" id="lastname" name="lastname" value="" />
                            </div>
                            <div class="form-group">
                            <label><strong>NIC</strong></label>
                                <input type="text" minlength="10" maxlength="10" class="form-control  bdr-color" placeholder="NIC" id="nic" name="nic" value="" />
                            </div>
                        <div>
                            <label><strong>Select</strong></label>
                            <select name="gender" id= "gender" class="form-control">
                               <option value="" selecteddisable>Select Gender</option>
                               <option value="1">Male</option>
                               <option value="2">Female</option> 
                            </select>
                         </div> 
                         <br>
                            <div class="form-group">
                                <label><strong>Mobile Number</strong></label>
                                <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control  bdr-color" placeholder="Your Phone *" id="mobilenumber" value="" />
                            </div>


                            
                    </div>
                </div>
                <div class="col-md-12 row">
                <div class="col-md-6">
                <input type="reset" class="btn btn-primary btn-user btn-block" value="reset" />
                </div>
                <div class="col-md-6">
               
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Next"/>
                </form>
                </div>
                </div>
            </div>
        <div class="col-md-2"></div>
         </div>
</form>

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



