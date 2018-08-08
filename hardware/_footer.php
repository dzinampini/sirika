

<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>

<!-- toggle showing of buttons content  -->
<script>
$(document).ready(function(){
    $("#wt").click(function(){
      $("#wt-data").toggle();
    });

    $("#ch").click(function(){
      $("#ch-data").toggle();
    });
});
</script>

<!-- refresh contents every 1 sec -->
<script type="text/javascript">
    $(document).ready(function(){
      refreshWT();
      refreshCH();
    });

    function refreshWT(){
        $('#wt-data').load('_data_wt.php', function(){
           setTimeout(refreshWT, 10000); //changing after every 10seconds
        });
    }

    function refreshCH(){
        $('#ch-data').load('_data_ch.php', function(){
           setTimeout(refreshCH, 10000); //changing after every 10seconds
        });
    }
</script>

