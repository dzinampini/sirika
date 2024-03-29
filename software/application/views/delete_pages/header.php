<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>page 246</title>
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
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard">page246</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Billers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBiller" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-suitcase"></i>
            <span class="nav-link-text">Billers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseBiller">
            <li>
              <a href="add_biller">Add</a>
            </li>
            <li>
              <a href="billers">View</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCustomers" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Customers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseCustomers">
            <li>
              <a href="add_customer">Add</a>
            </li>
            <li>
              <a href="customers">View</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoices">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInvoices" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Invoices</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseInvoices">
            <li>
              <a href="add_invoice">Add</a>
            </li>
            <li>
              <a href="invoices">View</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payments">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePayments" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">Payments</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsePayments">
            <li>
              <a href="add_payment">Add</a>
            </li>
            <li>
              <a href="payments">View</a>
            </li>
          </ul>
        </li>


       <!--  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projects">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProjects" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Projects</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProjects">
            <li>
              <a href="add_project">Add</a>
            </li>
            <li>
              <a href="view_project">View</a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Receipts">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReceipts" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Receipts</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseReceipts">
            <li>
              <a href="add_receipt">Add</a>
            </li>
            <li>
              <a href="receipts">View</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Services & Products">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSP" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Services &amp; Products</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSP">
            <li>
              <a href="add_sp">Add</a>
            </li>
            <li>
              <a href="products">View</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Suppliers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSuppliers" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-truck"></i>
            <span class="nav-link-text">Suppliers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSuppliers">
            <li>
              <a href="add_supplier">Add</a>
            </li>
            <li>
              <a href="suppliers">View</a>
            </li>
          </ul>
        </li>


        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tickets">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTickets" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-inbox"></i>
            <span class="nav-link-text">Support Tickets</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseTickets">
            <li>
              <a href="add_ticket">Add</a>
            </li>
            <li>
              <a href="view_tickets">View</a>
            </li>
          </ul>
        </li> -->


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quotations">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseQuotations" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-clone"></i>
            <span class="nav-link-text">Quotations</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseQuotations">
            <li>
              <a href="add_quotation">Add</a>
            </li>
            <li>
              <a href="quotations">View</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="alerts">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preferences">
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
 
    