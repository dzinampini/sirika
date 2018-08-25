<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tracker</a>
        </li>
        <li class="breadcrumb-item active">Notifications</li>
      </ol>

      <a href=""></a>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Vehicle</th>
            <th>Record Time</th>
            <th>Event</th>
          </tr>
          <?php foreach($notifications as $noti): ?>
          <tr>
            <td><?php echo $noti->vehicle; ?></td>
            <td><?php echo $noti->record_time; ?></td>
            <td><?php echo $this->tracker_model->get_event($noti->event); ?></td>
          </tr>
        <?php endforeach; ?>
        </table>
      </div>
      
          


      
      <!-- <div style="height: 1000px;"></div> -->
    </div>

<?php include('footer.php'); ?>
