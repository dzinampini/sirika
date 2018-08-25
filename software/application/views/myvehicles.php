<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Vehicles</li>
      </ol>
      <!-- <h1>Dashboard</h1> -->
      <p>
        <?php $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        if($success_msg){ ?>
          <div class="alert alert-success">
            <?php echo $success_msg; ?>
          </div>
        <?php }

        if($error_msg){ ?>
          <div class="alert alert-danger">
            <?php echo $error_msg; ?>
          </div>
        <?php } ?>
      </p>

      <a href="addvehicle"><i class="fa fa-plus"> Add New Vehicle</i></a>
      <br><br>

      <!-- <hr> -->
      <div class="row table-responsive">
        <table class="table">
          <tr>
            <th>Reg</th>
            <th>Vehicle</th>
          </tr>
          <?php foreach($vehicles as $vehicle): ?>
          <tr>
            <td><?php echo $vehicle->reg; ?></td>
            <td><?php echo $vehicle->vehicle; ?></td>
          </tr>
        <?php endforeach; ?>
        </table>
      </div>

      
          


      
      <!-- <div style="height: 1000px;"></div> -->
    </div>

<?php include('footer.php'); ?>
