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
          <label>Payment Method</label>
          <select name="payment" class="form-control">
            <option value"cash">cash</option>
            <option value"card">card</option>
            <option value"ecocash">ecocash</option>
            <option value"orange_card">orange_card</option>
          </select>
        </div>
        <div class="form-group">
          <label>Tap Orange Card (if paying with orange card)</label>
          <input name="orange_card" type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>Amount</label>
          <input name="amount" type="number" class="form-control">
        </div>
        <div class="form-group">
          <input name="simulate" type="submit" class="form-control" value="Humans Detector">
          <br>
          or 
          <br>
          <input name="simulate_manual" type="submit" class="form-control" value="Ticket a Passenger">
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
  $route = 'no_neeed'; /////////////////////tracker device comes with coordinates so dont worry about this one?>
  
  <script>location="bt-progress.php?vehicle=<?php echo $vehicle; ?>&route=<?php echo $route; ?>";</script>
<?php } ?> 


<?php if(isset($_POST['simulate_manual'])){
  $vehicle = $_POST['vehicle'];
  $payment = $_POST['payment'];
  $amount = $_POST['amount']; 
  $orange_card = $_POST['orange_card']; 

  if ($orange_card != ''){
    //check card balance 
    $balance_query = "SELECT * FROM bt_registered WHERE id = '$orange_card'";
    $get_balance = mysqli_query($con, $balance_query);
    $row = mysqli_fetch_array($get_balance) or die(mysqli_error($con)); 
    $balance = $row['balance'];
    $new_balance = $balance - $amount; 

    if($new_balance < 0){
      ?><script>alert("Insufficient Balance to pay with card");</script><?php
      exit;  
    }

    else{
      //update $new_balance 
      $update_balance_query = "UPDATE bt_registered SET balance='$new_balance' WHERE id='$orange_card'";
      $upd_balance = mysqli_query($con, $update_balance_query); 
      //get company to be paid 
      $company_query = "SELECT * FROM vehicles WHERE id = '$vehicle'";
      $get_company = mysqli_query($con, $company_query);
      $row = mysqli_fetch_array($get_company) or die(mysqli_error($con)); 
      $company = $row['company'];
      //insert bt_statement 
      $statement_query = "INSERT INTO bt_statement (passenger, company, vehicle, amount, balance)
                                    VALUES('$orange_card','$company','$vehicle','$amount', '$new_balance')";
      $ins_loc = mysqli_query($con, $statement_query) or die(mysqli_error($con)); 

    }
  }

      // get location coordinates, last stop by bus. where bus stopped to pick people  
      $last_coords = "SELECT * FROM tr_tracking_data WHERE vehicle = '$vehicle' AND speed = '0' ORDER BY id DESC LIMIT 1 ";
      $get_coords=mysqli_query($con, $last_coords);
      $row=mysqli_fetch_array($get_coords) or die(mysqli_error($con));
      // $id = $row['id'];
      $lat = $row['latitude'];
      $lon = $row['longitude'];



      $location = "INSERT INTO bt_traditional (vehicle, latitude, longitude, payment, amount) 
                                          VALUES('$vehicle','$lat','$lon','$payment', '$amount')";
      $ins_loc = mysqli_query($con, $location) or die(mysqli_error($con)); 


      echo "Latitude: ".$lat."<br>";
      echo "longitude: ".$lon."<br>";
      echo "Payment: ".$payment."<br>";
      echo "Amount: ".$amount."<br>";
  
} ?>
<!--?vehicle=<?php //echo $vehicle; ?>&route=<?php //echo $route; ?>