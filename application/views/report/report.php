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
            <h1 class="h3 mb-0 text-gray-800">Reports</h1>
            
          </div>

         <!--Content-->
         <div class="form-group">
                    <div class="row">
                        <label for="date" class="col-sm-1 control-label">since</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <label for="date" class="col-sm-1 control-label">To</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" name="date">
                    </div><br>
                    <label><strong>Select Report Type</strong></label>
                            <select name="gender" id= "gender" class="form-control">
                               <option value="" selecteddisable>Select Report Type</option>
                               <option value="1">Payment</option>
                               <option value="2">Reservation</option> 
                               <option value="3">Registration</option>
                            </select> 
</div><br><br><br><br>
                            <div class="col-md-12 row">
                <div class="col-md-6">
                <input type="reset" class="btn btn-primary btn-user btn-block" value="Generate and Download" />
                
                </div>
                
                </form>
                </div>
                </div>
                </div>
                <div>
                </div>
                

         <!--Content-->

       
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->
    <?php 
    $this->load->view('common/footer.php');
     ?>
     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
<?php 
$this->load->view('common/scripts.php'); ?>
  

</body>

</html>
