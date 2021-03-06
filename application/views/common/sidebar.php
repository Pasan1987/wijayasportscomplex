<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>index.php/dashboard/dashboard/dashboardcontrol">
    <div class="sidebar-brand-icon rotate-n-15">

      <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">Wijaya Sports Complex</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/dashboard/dashboardcontrol">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <!-- <div class="sidebar-heading">
        Interface
      </div> -->

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fa fa-users	"></i>
      <span>Member</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/member/Registration/registrationProcess">Registration</a>
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/member/Registration/loadview">View</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_emp" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fa fa-address-card"></i>
      <span>Employee</span>
    </a>
    <div id="collapse_emp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/employee/employee_reg/employeeReg">Registration</a>
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/employee/employee_reg/view_empdetails">View</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-money-check-alt	"></i>
      <span>Payment</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/payment/payment/paymentProcess">Payment</a>
        <!-- <a class="collapse-item" href="utilities-border.html">Reservation</a> -->
        <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRes" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-book"></i>
      <span>Reservation</span>
    </a>
    <div id="collapseRes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/reservation/reservation/reservationProcess">Reservation</a>

      </div>
    </div>
  </li>

  <!-- Divider -->


  <!-- Heading -->
  <div class="sidebar-heading">

  </div>

  <!-- Nav Item - Pages Collapse Menu -->


  <!-- <hr class="sidebar-divider"> -->

  <!-- Nav Item - Charts -->
  <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reports</span></a>
      </li> -->
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRep" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="far fa-file-alt"></i>
      <span>Report</span>
    </a>
    <div id="collapseRep" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
        <a class="collapse-item" href="<?php echo base_url() ?>index.php/report/report/reportGenerate">Report</a>

      </div>
    </div>
  </li>

  <hr class="sidebar-divider">

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>index.php/setting/setting/allSetting">
      <i class="fas fa-tools"></i>
      <span>Settings</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->