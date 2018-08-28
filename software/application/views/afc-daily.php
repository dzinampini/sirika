<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">AFC</a>
        </li>
        <li class="breadcrumb-item active">Real Time View</li>
      </ol>

       <div class="card mb-3">
        <div class="card-header">
          <!-- <i class="fa fa-table"></i> Data Table Example</div> -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Vehicle</th>
                  <th>Cumulative Revenue</th>
                  <th>Current Location</th>
                  <th>Current Passengers</th>
                </tr>
              </thead>
              
              <tbody>

                <?php foreach ($vehicles as $vehicle): ?>
                <tr>
                  <td><?php echo $vehicle->vehicle; ?></td>
                  <td>$<?php echo $this->afc_model->cum_revenue($vehicle->id); ?></td>
                  <td><?php echo $this->bts_model->current_lat($vehicle->id); ?> , <?php echo $this->bts_model->current_lon($vehicle->id); ?></td>
                  <td><?php  echo  $this->bts_model->passenger_count($vehicle->id); ?></td>
                </tr>
                <?php endforeach; ?>
                

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
      
          


      
      <div style="height: 1000px;"></div>
    </div>

<?php include('footer.php'); ?>
