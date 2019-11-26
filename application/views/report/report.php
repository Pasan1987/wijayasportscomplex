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
