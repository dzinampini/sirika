<?php include('_header.php'); 
  $vehicle = $_GET['vehicle'];
  $route = $_GET['route'];
?>

<div class="container">
  <div class="row">
    <h3>Tracking happening now</h3>
    <div id="simulation"></div>
  </div>
</div>

<?php include('_footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
      refreshSimu();
    });

    function refreshSimu(){
        $('#simulation').load('_simulate-tracker.php?vehicle=<?php echo $vehicle; ?>&route=<?php echo $route; ?>', function(){
           setTimeout(refreshSimu, 2000); //changing after every 5seconds
        });
    }
</script>