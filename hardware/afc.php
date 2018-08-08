<?php include('_header.php'); 

include('opendb.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form class="" name="" method="POST">

        <div class="form-group">
          <label>Vehicle to ticket</label>
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
          <label>Tap Orange Card (if using with orange card)</label>
          <input name="orange_card" type="number" class="form-control">
        </div>
        <div class="form-group">
          <input name="afc" type="submit" class="form-control" value="Use Orange Card">
          <br>
          <input name="token" type="submit" class="form-control" value="Or Generate Travel Token">
        </div>
      </form>

      <div id="simulation"></div>

    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>
<?php include('_footer.php'); ?>


<?php 
$vehicle = $_POST['vehicle'];
$orange_card = $_POST['orange_card']; 

// check bus location 
$last_coords = "SELECT * FROM tr_tracking_data WHERE vehicle = '$vehicle' ORDER BY id DESC LIMIT 1 ";
$get_coords=mysqli_query($con, $last_coords);
$row=mysqli_fetch_array($get_coords) or die(mysqli_error($con));
$lat = $row['latitude'];
$lon = $row['longitude'];

//check minimum trip cost 
$cost_query = "SELECT * FROM tr_tracking_data WHERE vehicle = '$vehicle' ORDER BY id DESC LIMIT 1 ";
$get_cost=mysqli_query($con, $cost_query);
$row=mysqli_fetch_array($get_cost) or die(mysqli_error($con));
$max_cost = $row['journey_cost'];

// check if in bus or not (check afc_rides)
$in_out_query = "SELECT * FROM afc_rides WHERE passenger = '$orange_card' AND vehicle = '$vehicle' ORDER BY id DESC LIMIT 1 ";
$get_in_out=mysqli_query($con, $in_out_query);
$row=mysqli_fetch_array($get_in_out) or die(mysqli_error($con));
$db_lat = $row['latitude'];
$db_lon = $row['longitude'];
$record_no = $id; 

if($db_lat != '' && $db_lon != ''){ //this means you are getting in
  //check balance and dont allow if below minimum trip cost
  $balance_query = "SELECT * FROM bt_registered WHERE id = '$orange_card'";
  $get_balance = mysqli_query($con, $balance_query);
  $row = mysqli_fetch_array($get_balance) or die(mysqli_error($con)); 
  $balance = $row['balance'];
  $new_balance = $balance - $max_cost; 

    if($new_balance < 0){
      ?><script>alert("You need a minimum of $<?php echo $max_cost; ?> to get onto this ride. Use tokens if you have cash instead");</script><?php
      exit;  
    }
  
    else{ // record me in rides
      $location = "INSERT INTO afc_rides (passenger, vehicle, in_lat, in_lon, amount) 
                                          VALUES('$orange_card','$vehicle','$in_lat','$in_lon', '$amount')";
      $ins_loc = mysqli_query($con, $location) or die(mysqli_error($con)); 
    }

}

else{ //you are getting out 
  // calculate actual amount 
  $fare = $amount;

  // get current time and time  
  $out_time = "14-08-2018 00:00:00"; 



  // update out lats and times and actual deducted amount 
  $location = "UPDATE afc_rides SET  out_lat = '$lat', out_lon='$lon', amount='$fare', out_time='$out_time' WHERE id='$record_no'";
  $ins_loc = mysqli_query($con, $location) or die(mysqli_error($con)); 
}
}



?>