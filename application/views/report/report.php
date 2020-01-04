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
         <form method = "POST">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>REPORT GENERATE</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Since</strong></label>
                                <input type="date" class="form-control bdr-color" placeholder="Name with Initials*" value="" name = "namewithinitial" />
                            </div>  
                        <div>
                            <label>
                              <strong>Select Report</strong>
                            </label>
                            <select name="select report" id= "select report" class="form-control">
                               <option value="" selecteddisable>Select Report</option>
                               <option value="1">Payment</option>
                               <option value="2">Registration</option>
                               <option value="2">Reservation</option>  
                            </select>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                            <!-- <div class="form-group">
                              <label for="comment"><strong>Address</strong></label>
                              <textarea class="form-control  bdr-color" rows="2" name = "address" id="address"></textarea>
                            </div> -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                             <label>
                               <strong>To</strong>
                             </label>
                                <input type="date" name="dateofbirth" class="form-control  bdr-color" placeholder="MM/DD/YYYY" value="memberdbo" id="dob"  />
                            </div>
                            <br>
                    </div>
                </div>
                <!-- <div class="col-md-12 row"> -->
                <div >
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Generate and Download" />
                </div>
                <!-- <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Add" />
                </div> -->
                
                
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
