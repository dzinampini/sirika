<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- <h1>Dashboard</h1> -->
      <!-- <hr> -->
       <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bell"></i>
              </div>
              <div class="mr-5">26 Tracker Notifications!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 Vehicle Service Reminders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

       <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> AFC Revenue Collections</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Last Update - Today at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Bus Ticketing Revenue Collections</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Last Update - Today at 11:59 PM</div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> 
              Weekly Revenue Collections
            </div>
            <div class="card-body">
            <div class="row">
              <div class="col-sm-8 my-auto">
                <canvas id="myBarChart" width="100" height="50"></canvas>
              </div>
              <div class="col-sm-4 text-center my-auto">
                <div class="h4 mb-0 text-primary">
                  $34,693
                </div>
                <div class="small text-muted">
                  YTD Revenue
                </div>
                <hr>
                <div class="h4 mb-0 text-warning">
                  $18,474
                </div>
                <div class="small text-muted">
                  YTD Expenses
                </div>
                <hr>
                <div class="h4 mb-0 text-success">
                  $16,219
                </div>
                <div class="small text-muted">
                  YTD Margin
                </div>
              </div>
            </div>
          </div>
        <div class="card-footer small text-muted">
          <!-- Last update at 11:59 PM -->
        </div>
      </div>
    </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Different Vehicles Collections</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">
              Last update - Today at 6:09 PM
            </div>
          </div>
        </div>
      </div>
          


      
      <div style="height: 1000px;"></div>
    </div>

<?php include('footer.php'); ?>
