<?php include('_header.php'); 
  $vehicle = $_GET['vehicle'];
  $route = $_GET['route'];
?>

<div class="container">
  <div class="row">
    <h3>BT happening now. picking after every 2 mins</h3>
    <div id="simulation"></div>
  </div>
</div>

<?php include('_footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
      refreshSimu();
    });

    function refreshSimu(){
        $('#simulation').load('_simulate-bt.php?vehicle=<?php echo $vehicle; ?>&route=<?php echo $route; ?>', function(){
           setTimeout(refreshSimu, 120000); //changing after every 2minutes
        });
    }
</script>