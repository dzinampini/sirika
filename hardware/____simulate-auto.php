<?php 

include('opendb.php'); 

// wtaer tank values 
$wta = rand(80, 100); 
$wtb = rand(80, 100); 
$wtc = rand(80, 100); 
$wtd = rand(80, 100); 

// chiller values 
$ca = rand(20, 40); 
$cb = rand(20, 40); 
$cc = rand(20, 40); 
$cd = rand(20, 40); 

$water_tanks = "INSERT INTO water_tanks (a, b, c, d) VALUES('$wta','$wtb','$wtc','$wtd')";
$ins_wt = mysqli_query($con, $water_tanks); 

$chillers = "INSERT INTO chillers (a, b, c, d) VALUES('$ca','$cb','$cc','$cd')";
$ins_c = mysqli_query($con, $chillers); 

?>


<div class="table-responsive">
  <table class="table">
    <tr>
      <td>
        water tank a
        <br>
        <?php echo $wta; ?>
      </td>
      <td>
        wt b
        <br>
        <?php echo $wtb; ?>
      </td>
      <td>
        wt c
        <br>
        <?php echo $wtc; ?>
      </td>
      <td>
        wt d
        <br>
        <?php echo $wtd; ?>
      </td>
    </tr>
    <tr>
      <td>
        chiller a
        <br>
        <?php echo $ca; ?>
      </td>
      <td>
        c b
        <br>
        <?php echo $cb; ?>
      </td>
      <td>
        c c
        <br>
        <?php echo $cc; ?>
      </td>
      <td>
        d d
        <br>
        <?php echo $cd; ?>
      </td>
    </tr>
  <table>
    <p>reloading this page  will be adding another set of values to DB
    <br>
    reloading this page is like device has visitied this link again with values 
      </p>

      <p><a href="update-values.php">Reload</a></p>  
      <p><a href="simulation.php">Go back to simulation page</a></p>   
</div>