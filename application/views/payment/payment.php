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
            <h1 class="h3 mb-0 text-gray-800">Payment</h1>  
          </div>

         <!--Content-->
         <?php $this->load->view('common/scripts.php'); ?>
<div class="container">
	<div class="row">
        <div class="col-sm-12">
        </div>
        </div>
        <!-- panel preview -->
        <div class="row">
        <div class="col-sm-6">
            <div class="card mainCard">
                <style>
                   .mainCard{
                    padding:10px;
                   } 
                </style>
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <div class="row">
                        <label for="concept" class="col-sm-4 control-label">Member ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="memberid" name="membername">
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                    <div class="row">
                        <label for="description" class="col-sm-4 control-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                </div>
                    </div> 
                    <div class="form-group">
                    <div class="row">
                        <label for="amount" class="col-sm-4 control-label">Amount</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <label for="status" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="status" name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                        </div>
                </div>
                    </div> 
                    <div class="form-group">
                    <div class="row">
                        <label for="date" class="col-sm-4 control-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>   
                </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-primary preview-add-button" onclick="btnAdd()">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>          
        </div> 
        <!-- / panel preview -->
        <div class="col-sm-6">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table"  id="tbdPayment">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ></tr>
                            </tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                <!-- <h4>Total: <strong><span class="preview-total"></span></strong></h4> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                </div>                
            </div>
        </div>
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
<?php $this->load->view('common/scripts.php'); ?>
  

</body>

<script>
function btnAdd()
{
    var id = document.getElementById('memberid').value;
    var description = document.getElementById('description').value;
    var amount = document.getElementById('amount').value;
    var status = document.getElementById('status').value;
    var date = document.getElementById('date').value;
        
    var t  = document.createElement("table"),
    tb = document.createElement("tbody"),
    tr = document.createElement("tr"),
    tdId = document.createElement("td");
    tdDescription = document.createElement("td");
    tdAmount = document.createElement("td");
    tdStatus = document.createElement("td");
    tdDate = document.createElement("td");

    tdId.innerHTML = id;
    tdDescription.innerHTML = description;
    tdAmount.innerHTML = amount;
    tdStatus.innerHTML = status;
    tdDate.innerHTML = date;

    tr.appendChild(tdId)
    tr.appendChild(tdDescription)
    tr.appendChild(tdAmount)
    tr.appendChild(tdStatus)
    tr.appendChild(tdDate)

    document.getElementById("tbdPayment").appendChild(tr);

    document.getElementById('memberid').value = "";
    document.getElementById('description').value="";
    document.getElementById('amount').value="";
    document.getElementById('status').value="";
    document.getElementById('date').value="";
}
</script>


</html>

  <!-- End of Page Wrapper -->









<!-- 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  -->