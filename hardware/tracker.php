<?php include('_header.php'); 
include('opendb.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form class="" name="" method="POST">
        <div class="form-group">
          <label>Vehicle to move</label>
          <select name="vehicle" class="form-control">
            <?php $rs = mysqli_query($con, "select * from vehicles")or die(mysql_error());
              while($row = mysqli_fetch_array($rs)){ 
                $vehicle_name = $row['vehicle']; 
                $vehicle = $row['id']; ?>
                <option value="<?php echo $vehicle; ?>"><?php echo $vehicle_name; ?></option>
              <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <select name="route" class="form-control">
            <option value"kwekwe">Kwekwe</option>
            <option value"shurugwi">Shurugwi</option>
            <option value"bulawayo">Bulawayo</option>
            <option value"lower_gweru">Lower Gweru</option>
            <option value"harare">harare</option>
          </select>
        </div>
        <div class="form-group">
          <input name="simulate" type="submit" class="form-control" value="Submit">
        </div>
      </form>

      <div id="simulation"></div>

    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>
<?php include('_footer.php'); ?>




<?php if(isset($_POST['simulate'])){
  $vehicle = $_POST['vehicle']; ////////////when gtracker device visits this page, get the actual vehicle # form db
  $route = $_POST['route']; /////////////////////tracker device comes with coordinates so dont worry about this one?>
  
  <script>location="tracker-progress.php?vehicle=<?php echo $vehicle; ?>&route=<?php echo $route; ?>";</script>
<?php } ?> 


<!--?vehicle=<?php //echo $vehicle; ?>&route=<?php //echo $route; ?>