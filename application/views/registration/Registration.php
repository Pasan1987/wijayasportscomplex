<!DOCTYPE html>
<html lang="en">

<head>

 <?php
    $this->load->view('common/header.php');
 ?>
 <title>Test</title>

</head>


<body id="page-top">
  <div>
  <h3>Registrations Forms<h3>
</div>
<form>
  <div>
    <label for="name">Name</label>
<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</div>

<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
  <div class="col-4">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div>
  <label for="gender">Gender</label>
  <div class="col-4">
<div class="radio">
  <label><input type="radio" name="optradio" checked>Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Female</label>
</div>
</div>


  <div class="form-group">
    <label for="address">Address</label>
    <input type="email" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="addressHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <label for="selectsports">Select the sports</label>
  <div class="form-check has-success">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxSuccess" value="option1">
    Badminton
  </label>
</div>
<div class="form-check has-warning">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxWarning" value="option1">
    Swimming
  </label>
</div>
<div class="form-check has-danger">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxDanger" value="option1">
    Body Building
  </label>
</div>
<div><button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

  <!-- Page Wrapper -->
  <div id="wrapper">

     

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       

        <!-- Begin Page Content -->
        <div class="container-fluid">
        </div>
    </div>
</div>
</div>

</body>
</html>