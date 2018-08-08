<?php 

include('opendb.php'); 

// wtaer tank values 
$vehicle = $_GET['vehicle'];  
$route = $_GET['route'];


//////////route haina basa here

// get location coordinates, last 
$db_racho = 'sim_'.$route;
$last_coords = "SELECT * FROM tr_tracking_data WHERE vehicle = '$vehicle' ORDER BY id DESC LIMIT 1 ";
$get_coords=mysqli_query($con, $last_coords);
$row=mysqli_fetch_array($get_coords) or die(mysqli_error($con));
// $id = $row['id'];
$lat = $row['latitude'];
$lon = $row['longitude'];

// insert picked and dropped number along with coordinates 
$picked = rand(0, 4); 
$dropped = rand(0, 4); 

$location = "INSERT INTO bt_human_sensor (vehicle, latitude, longitude, picked, dropped) 
                                    VALUES('$vehicle','$lat','$lon','$picked', '$dropped')";
$ins_loc = mysqli_query($con, $location); 


echo "Latitude: ".$lat."<br>";
echo "longitude: ".$lon."<br>";
echo "picked: ".$picked."<br>";
echo "dropped: ".$dropped."<br>";


?>