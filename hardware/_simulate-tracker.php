<?php 

include('opendb.php'); 

// wtaer tank values 
$vehicle = $_GET['vehicle'];  
$route = $_GET['route'];

// get route coordinates, last 0 for the route 
$db_racho = 'sim_'.$route;
$last_coords = "SELECT * FROM $db_racho WHERE used = '0' ORDER BY id ASC  LIMIT 1 ";
$get_coords=mysqli_query($con, $last_coords);
$row=mysqli_fetch_array($get_coords) or die(mysqli_error($con));
$id = $row['id'];
$lat = $row['latitude'];
$lon = $row['longitude'];

// this means you cant use one route for many vehicles at once 



// insert retrieved coordinates  along with the otehr data 
$mass = rand(2000, 4000); 
$speed = rand(80, 90); 
$on_off_status = 1; 
$idling = 1; 
$battery = 12; 

$location = "INSERT INTO tr_tracking_data (vehicle, latitude, longitude, mass, speed, on_off_status, idling, battery) 
                                    VALUES('$vehicle','$lat','$lon','$mass', '$speed', '$on_off_status', '$idling', '$battery')";
$ins_loc = mysqli_query($con, $location); 


//update the lastly used coordinates 
$update_coords = "UPDATE $db_racho SET used='1' WHERE id='$id'";
$upd_coords = mysqli_query($con, $update_coords); 


echo "Latitude: ".$lat."<br>";
echo "longitude: ".$lon."<br>";


?>