<!DOCTYPE html>
<html lang="en">

<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/jquery-ui-1.12.0/jquery-ui.css'); ?>" />
 <?php
$this->load->view('common/header.php');
?>
 <title>Reservation</title>

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
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>RESERVATION</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Name</strong></label>
                                <input type="text" class="form-control bdr-color" placeholder="Name *" value="" />
                            </div>
                            <div class="form-group">
                                <label><strong>Sport</strong></label>
                                <select class="form-control" plceholder="Select a sport">
                                <option selected>Select a sport</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Badminton">Badminton</option>
                                </select>
                                </div>
                            <div class="form-group">
                             <label for="comment"><strong>Event</strong></label>
                              <textarea class="form-control  bdr-color" rows="6" id="address"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label><strong>Date</strong></label>
                                <input type="text" class="form-control  bdr-color" placeholder="DD/MM/YYYY *"  value="" />
                            </div>
                            <div class="form-group">
                            <label><strong>Time</strong></label>
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control  bdr-color" placeholder="hh:mm"  value="" />
                            </div>
                            <div class="form-group">
                            <label><strong>Contact Number</strong></label>
                                <input type="text" class="form-control  bdr-color" placeholder="Mobile Number *" value="" />
                            </div>
                            </form>
                    </div>
                </div>
                <div class="col-md-12 row">
                <div class="col-md-6">
                <input type="reset" class="btn btn-primary btn-user btn-block" value="reset" />
                </div>
                <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit"/>
                </div>
                </div>
            </div>
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
<!--load jquery-->
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
<!--load jquery ui js file-->
<script src="<?php echo base_url('assets/jquery-ui-1.12.0/jquery-ui.js'); ?>"></script>

</html>





