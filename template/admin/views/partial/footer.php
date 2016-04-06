	
  	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.gritter/js/jquery.gritter.js"></script>

  	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/behaviour/general.js"></script>
  	<script src="<?=ADMIN_ASSETS?>js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js">
	</script>
	<script src="<?=ADMIN_ASSETS?>js/jquery.select2/select2.min.js" type="text/javascript"></script>
	<script src="<?=ADMIN_ASSETS?>js/skycons/skycons.js" type="text/javascript"></script>
	<script src="<?=ADMIN_ASSETS?>js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="<?=ADMIN_ASSETS?>js/intro.js/intro.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

	<script src="<?=ADMIN_ASSETS?>js/jquery.ui/jquery-ui.js" type="text/javascript"></script>

	<!--Modal-->
	<!--<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.niftymodals/js/jquery.modalEffects.js"></script> -->

	<!--isCheck box-->
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.icheck/icheck.min.js"></script>

	<!--Datatable-->
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.datatables/jquery.datatables.min.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>

  	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init({
          nanoScroller: false
        });
        
        App.dashBoard();        
        //introJs().setOption('showBullets', false).start();

        //Horizontal Icons dataTable
        $('#datatable-icons').dataTable();

    });
    </script>
	<script src="<?=ADMIN_ASSETS?>js/behaviour/voice-commands.js"></script>
	<script src="<?=ADMIN_ASSETS?>js/bootstrap/dist/js/bootstrap.min.js"></script>
	<!--
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.flot/jquery.flot.labels.js"></script>
	-->
	<!--Admin APP JS-->
	<script src="<?=ADMIN_ASSETS?>js/admin.js"></script>
</body>
</html>
