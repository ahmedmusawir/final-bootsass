      

  </div>  <!-- END Wrapper -->


   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.onepage-scroll.min.js"></script>
    
    	<!-- Custom JavaScript -->
		<script src="js/jquery.tubular.1.0.js"></script>
    	<script>

    	<?php //$youtube =  'WTAHzO1i6Mw'; ?> //perfect animal
    	<?php //$youtube =  '0DUoQgCnNlE'; ?> //nice and small, cannot cut any play time from the front
    	<?php //$youtube =  'JC2w3H1NpX0'; ?> //planet earth at the beging may be at the end too
    	<?php //$youtube =  'CLMQdZ-dwi4'; ?> //ok
    	<?php //$youtube =  'DaYx4XmWEoI'; ?> //perfect
    	<?php //$youtube =  'tFx6wt_gI3A'; ?> //pretty cool, need to watch the full video
    	<?php //$youtube =  'txyhCiALf2Y'; ?> //End Text Kills it
    	<?php //$youtube =  '4hPiG1fr68Q'; ?> //Low video quality
    	<?php //$youtube =  'GdFRB7D53Do'; ?> //Perfect - but too happy
    	<?php //$youtube =  'svnh39AL11g'; ?>   //Perfect
    	<?php //$youtube =  'zGtz_GOA79w'; ?> //Dubai
    	<?php //$youtube =  'a6g7aqILL3Y'; ?> //Scary Starfish
    	<?php $youtube =  '_304JRr0gHQ'; ?> //Perfect Almost - End text
    	<?php //$youtube =  '_QqfifH3-rk'; ?> //Perfect - but text flash at the end
    	<?php //$youtube =  'ryqdoe6xLs4'; ?> //Nice and Bright
    	<?php //$youtube =  'Rk6_hdRtJOE'; ?> //Perfect Almost - End text
    	<?php //$youtube =  'yIbf5IUsaSA'; ?> //Perfect

    	jQuery('document').ready(function() {
			var options = { videoId: '<?php echo $youtube; ?>', start: 20 };
			// var options = { videoId: 'ab0TSkLe-E0', start: 3 };
			// $('#myVideo').tubular(options);
			$('#wrapper').tubular(options);
			// f-UGhWj1xww cool sepia hd
			// 49SKbS7Xwf4 beautiful barn sepia
		});

    	</script>
  </body>
</html>