<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Bus Ticketing</a>
        </li>
        <li class="breadcrumb-item active">Reports</li>
      </ol>


<div class="container">
  <form action="" class="form-horizontal"  role="form">
      <div class"row">


        <div class="col-md-3">
          <div class="form-group">
            <label for="dtp_input3" class="control-label">Report Start</label>
            <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
              <input class="form-control" type="text" value="" readonly>
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            <input type="hidden" id="dtp_input2" value="" /><br/>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="dtp_input2" class="control-label">Report End</label>
              <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                <input class="form-control" type="text" value="" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
              <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
          </div>

        <div class="col-md-3">
          <label>Report</label>
          <select name="report" class="form-control">
            <option value="">Transactions Statement</option> <!-- table with all the details  -->
            <option value="">Daily Perfomances Chart</option>
            <option value="">Total Revenue Graph</option>
            <option value="">Total Revenue Contributions Pie Chart</option>
            <option value="">Pickup Points Operational Report</option>
            <option value="">Pickup Time Operational Report</option>
          </select>
        </div>

        <div class="col-md-3">
          <br>
          <label>Vehicle</label>
          <select name="report" class="form-control">
            <option value="">All Vehicles</option>
            <?php foreach ($vehicles as $vehicle): ?>
              <option value="<?php echo $vehicle->id; ?>"><?php echo $vehicle->vehicle; ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <div class="col-md-3">
          <br>
          <input name="get_report" value="Get Report" class="form-control" type="submit">
        </div>

        </div>
  </form>
</div>

      
          

    </div>

<?php include('footer.php'); ?>

