<?php include('_header.php'); ?>

<div class="container">
<p>values are being update every 5 seconds. for best simulation results anaysis. open this page in a new tab and remain on the real time view page </p>
<div id="simulation"></div>


<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


<!-- refresh contents every 1 sec -->
<script type="text/javascript">
    $(document).ready(function(){
      refreshSimu();
    });

    function refreshSimu(){
        $('#simulation').load('_simulate-auto.php', function(){
           setTimeout(refreshSimu, 5000); //changing after every 5seconds
        });
    }
</script>