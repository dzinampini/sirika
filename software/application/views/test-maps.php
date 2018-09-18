<?php //test if header should be deleted or not 
include('header.php'); ?>
<?php echo $map['js']; ?>


<?php
// keep it in case you might need it 
// $con = mysqli_connect('localhost','root','');
// mysqli_select_db($con, 'dzinaish_srk');
?>


<div class="content-wrapper"  style="padding:0px;width:100%;height:100%;">
  <div class="container-fluid" style="padding:0px;width:100%;height:100%;">
    <!-- map comes here  -->

    <?php echo $map['html']; ?>
  </div>
</div>

<?php include('footer.php'); ?>
