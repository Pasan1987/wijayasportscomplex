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
           <form action = "<?php echo base_url('index.php/reservation/reservation/addreservationprocess')?>" method = "POST">
           <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="padding:20px; border-color:#4e73df">
                <div class="card-header" ><h4 style="padding-left: 190px;"><strong>RESERVATION</strong></h4></div><br>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Name</strong></label>
                                <input type="text" class="form-control bdr-color" placeholder="Name *" id="name" name="name"value="" />
                            </div>
                            <!-- <div class="form-group">
                                <label><strong>Sport</strong></label>
                                <select class="form-control" plceholder="Select a sport" id="sport" name="sport">
                                <option selected>Select a sport</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Badminton">Badminton</option>
                                </select>
                                </div> -->
                                <div>
                            <label><strong>Sport</strong></label>
                            <select name="sport" id= "sport" class="form-control">
                               <option value="" selecteddisable>Select Sport</option>
                               <option value="1">Swimming</option>
                               <option value="2">Badminton</option> 
                            </select>
                         </div> 
                            <div class="form-group">
                             <label for="comment"><strong>Event</strong></label>
                              <textarea class="form-control  bdr-color" rows="6" id="event" name="event"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label><strong>Date</strong></label>
                                <input type="date" class="form-control  bdr-color" placeholder="MM/DD/YYYY *" id="date" name="date"value="" />
                            </div>
                            <div class="form-group">
                            <label><strong>Time</strong></label>
                                <input type="text" minlength="4" maxlength="4" name="time" class="form-control  bdr-color" placeholder="hh:mm"  value="" />
                            </div>
                            <div class="form-group">
                            <label><strong>Contact Number</strong></label>
                                <input type="text" class="form-control  bdr-color" placeholder="Mobile Number *" name="contactnumber" id="contactnumber" value="" />
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
</form>
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
