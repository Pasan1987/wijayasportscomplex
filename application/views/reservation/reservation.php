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
         <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">NIC</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Position</th>
      <th scope="col">Contact</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>dsad</td>
      <td>as</td>
      <td>asd</td>
      <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
      <button type="button" class="btn btn-primary btn-sm">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>wee</td>
      <td>ccx</td>
      <td>aas</td>
      <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
      <button type="button" class="btn btn-primary btn-sm">Delete</button>
      </td>
    </tr>
    
  </tbody>
</table>
<p align ="right">
<a class="btn btn-primary" href="<?php echo base_url() ?>index.php/reservation/reservation/addreservation" role="button">ADD</a>
</p>
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





