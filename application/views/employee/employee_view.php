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
            <h1 class="h3 mb-0 text-gray-800">Employee Details</h1>
            
          </div>

         <!--Content-->
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
      <th scope="col"></th>
      <th scope="col"></th>

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
      <td>
      <i class="fas fa-pen" aria-hidden="true"></i>
      </td>
      <td>
      <i class="	fas fa-trash-alt" aria-hidden="true"></i>
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
      <td>
      <i class="fas fa-pen" aria-hidden="true"></i>
      </td>
      <td>
      <i class="	fas fa-trash-alt" aria-hidden="true"></i>
      </td>
    </tr>
    
  </tbody>
</table>
<p align ="right">
<a class="btn btn-primary" href="<?php echo base_url() ?>index.php/add/add/addreservation" role="button">ADD</a>
</p>


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
