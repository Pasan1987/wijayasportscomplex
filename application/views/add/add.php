<!DOCTYPE html>
<html lang="en">

<head>

 <?php
    $this->load->view('common/header.php');
 ?>
 <title>Test</title>

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Reservation</h1>
            
          </div>
           <!--Content-->
           <div class="container register">
    <div class="row">
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="padding-top: 50px;">
                    <h3 class="register-heading">Member Registration Form</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group"><a>First Name</a>
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group"><a>Date of Birth</a>
                                <input type="number" class="form-control" placeholder="DD/MM/YYYY *" value="" />
                            </div>
                           
                            <div class="form-group">
                             <label for="comment">Address</label>
                              <textarea class="form-control" rows="5" id="address"></textarea>
                            </div>
                            <input type="reset" class="btn btn-primary btn-user btn-block" value="reset"/>
                            <!-- <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Confirm Password *" value="" />
                            </div> -->
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><a>Last Name</a>
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group"><a>NIC</a>
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div> -->
                            <div class="form-group"><a>Gender</a>
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group"><a>Mobile Number</a>
                                <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>

                            <!-- <div class="form-group"><a>Telephone Number</a>
                                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                            </div> -->
                            <div class="form-group"><a>Telephone Number</a>
                                <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <form action="<?php echo base_url() ?>index.php/member/member_registration/Registration/registrationDetails">
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Next"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div> -->
                            <input type="submit" class="btn btn-primary btn-user btn-block"  value="Next"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

           <!--Content-->

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