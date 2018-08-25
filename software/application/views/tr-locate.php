<?php// include('header.php'); ?>



<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'dzinaish_srk');
?>


<div class="content-wrapper">
  <div class="container-fluid">

   

    <style>
      #map {
        height: 100%;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
      <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -19.454763, lng: 29.816079}
        });
        
        setMarkers(map);
      }

      var beaches = [
        <?php //select all vehicles
        $rs_vehicles = mysqli_query($con, "SELECT * FROM vehicles")or die(mysqli_error($con));
        while($row = mysqli_fetch_array($rs_vehicles)){
          $number=$row['id']; 
          $vehicle = $row['vehicle']; 

          //select last record of each vehicle 
          $get_current_location = mysqli_query($con, "SELECT * FROM tr_tracking_data WHERE vehicle = '$number' ORDER BY id DESC  LIMIT 1")or die(mysqli_error($con));

          while($row = mysqli_fetch_array($get_current_location)){
            $current_lat=$row['latitude'];
            $current_lng = $row['longitude'];
            $vehicle =$row['vehicle']; 
            //get other tracking data  ?>

            ['<?php echo $vehicle; ?>', <?php echo $current_lat; ?>, <?php echo $current_lng; ?>],
          
          <?php }//closing rs_vehicles 
        } //closing get_current_coordinates ?>
      ];

      function setMarkers(map) {
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          size: new google.maps.Size(20, 32), // This marker is 20 pixels wide by 32 pixels high.
          origin: new google.maps.Point(0, 0), // The origin for this image is (0, 0).
          anchor: new google.maps.Point(0, 32) // The anchor for this image is the base of the flagpole at (0, 32).
        };
            
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
          };
          for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            // icon: image,
            shape: shape,
            title: beach[0],
            label: beach[0],
            zIndex: beach[3]
          });
        }
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUvLYTS383CQViF937bk1y0D_tYcjADyY&callback=initMap">
    </script>
  </div>
</div>

<?php include('footer.php'); ?>
