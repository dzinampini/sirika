<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIRIKA - Admin Panel</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>ckeditor/ckeditor/ckeditor.js"></script>
  <script src="<?php echo base_url(); ?>ckeditor/js/ckeditor/sample.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>ckeditor/toolbarconfigurator/lib/codemirror/neo.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'dzinaish_srk');
    ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/dashboard">Admin Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url(); ?>welcome/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Billers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCompanyData" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-suitcase"></i>
            <span class="nav-link-text">Company Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseCompanyData">
            <li>
              <a href="<?php echo base_url(); ?>welcome/mycompany">Company Details</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>welcome/myvehicles">Vehicles</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseVehicleTracker" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Vehicle Tracking</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseVehicleTracker">
            <li>
              <a href="<?php echo base_url(); ?>tracker/locate">Locate Vehicles</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>tracker/history">Track History</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>tracker/notifications">Notifications</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>tracker/reports">Reports</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoices">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBTD" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Bus Ticketing Device</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseBTD">
            <li>
              <a href="<?php echo base_url(); ?>bts/daily">Real Time Update</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>bts/report">Reports</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payments">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAFC" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">Automated Fare Collection </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAFC">
            <li>
              <a href="<?php echo base_url(); ?>afc/daily">Real Time Update</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>afc/report">Reports</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>welcome/preferences">
            <i class="fa fa-fw fa-cog"></i>Settings
          </a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
 
    