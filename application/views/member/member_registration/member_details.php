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

         <!--Content-->
         <form>
         <div class="container register">
    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>MEMBER REGISTRATION</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Height</strong></label>
                                <input type="number" class="form-control bdr-color" placeholder="Height *" Id="height" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Weight</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Weight *" Id="weight" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Neck</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Neck *" Id="neck" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Shoulder</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Shoulder *" Id="shoulder" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Chest</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Chest *" Id="chest" value="" />
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Forearm</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Forearm *" Id="foearm" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Arm</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Arm *" Id="arm" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Wrist</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Wrist *" Id="wrist" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Calf</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Calf *"Id="calf" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Ancle</strong></label>
                                <input type="number" class="form-control  bdr-color" placeholder="Ancle *" Id="ancle" value="" />
                            </div>
                        </div>
                            </form>
                    </div>
                    <div class="col-md-12 row">
                <div class="col-md-6">
                <form action="<?php echo base_url() ?>index.php/payment/payment/paymentProcess">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Previous" />
                </div>
                <div class="col-md-6">
                <form action="<?php echo base_url() ?>index.php/member/member_registration/Registration/registrationFee">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Next"/>
                </div>
                </div>
                </div>

            </div>
        <div class="col-md-2"></div>
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
<?php $this->load->view('common/scripts.php');?>


</body>

</html>





