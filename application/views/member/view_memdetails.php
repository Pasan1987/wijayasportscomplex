<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  $this->load->view('common/header.php');
  ?>
  <title>View Member</title>

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
            <h1 class="h3 mb-0 text-gray-800">View</h1>

          </div>

          <!--Content-->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">NIC</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
              <?php

              foreach ($members as $member) { ?>
                <tr>
                  <th scope="row"><?php echo $member->id ?></th>
                  <td><?php echo $member->firstname ?></td>
                  <td><?php echo $member->lastname ?></td>
                  <td><?php echo $member->nic ?></td>
                  <td><?php echo $member->address ?></td>
                  <td><?php echo $member->telephone ?></td>
                  <td>
                    <a href=""><i class="fas fa-pen" aria-hidden="true" style="color: green"></i></a>
                  </td>
                  <td>
                    <a href=""><i class="	fas fa-trash-alt" aria-hidden="true" style="color: red"></i></a>
                  </td>
                </tr>
              <?php  } ?>
            </tbody>
          </table>


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