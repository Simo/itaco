<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php include 'controllers/group_controller.php';?>
	<!-- Basic Page Needs
  ================================================== -->
	
	<?php include 'metas.php' ?>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/itaco_fav.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

  <div class="wrap topbar"><!-- Start Wrap Tobar -->
  </div><!-- End Wrap Topbar -->

  <div class="wrap topheader"><!-- Start Wrap TopHeader -->
	<div class="container">

		<?php include 'header.php' ?>

	</div><!-- End Container -->
  </div><!-- End Wrap TopHeader -->


  <div class="wrap seperateline"><!-- Start Wrap SeperateLine -->
	<div class="container">

		<div class="sixteen columns sepline">


		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap SeperateLine -->


  <div class="wrap messageinfo"><!-- Start Wrap MessageInfo -->
	<div class="container">

		<div class="sixteen columns">
        
		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap MessageInfo -->



  <div class="wrap sliderfl"><!-- Start Wrap SliderFl -->
	<div class="container" style="min-height: 400px;">

		<div class="sixteen columns">
			<div class="flexslider"><!-- Start Flexslider -->
	          <ul class="slides">
	            <li>
	  	    	    <img src="images/group/atolle.png" alt=""/>
					<div class="flex-caption"><p>Atolle Italia <span><a class="roller" href="http://www.atolle.com">go</a></span></p></div>
					</li>
	  	    		<li>
	  	    	    <img src="images/group/giuman.png" alt=""/>
				    <div class="flex-caption"><p>Giuman <span><a class="roller" href="http://www.giuman.com">go</a></span></p></div>
	  	    		</li>
	          </ul>
	        </div><!-- End Flexslider -->
		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap SliderFl -->


      <div class="wrap lastfooterbody"><!-- Start Wrap LastFooterBody -->
	  <div class="container">

	    <div class="sixteen columns sepline">
			<p class="three column alpha socialized">
				<a href="#"><img class="socialicons" src="images/glyfacebook.png"/></a>
				<a href="#"><img class="socialicons" src="images/glytwitter.png"/></a>
				<a href="#"><img class="socialicons" src="images/glylinked.png"/></a>
			</p>
			<div class="offset-by-eleven">
				<p class="copyrightcol five columns omega">&copy; 2012<span id="year_now"></span> Itaco. <?php echo $copyRight; ?>.</p>
			</div>
		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap LastFooterBody -->
  


	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="javascripts/tabs.js"></script>
	<script src="javascripts/jquery.flexslider-min.js"></script>
	<script src="javascripts/jquery.easing.1.3.js"></script>
	<script src="javascripts/jquery.elastislide.js"></script>
	<script src="javascripts/jquery.prettyPhoto.js"></script>
	<script src="javascripts/custom_p.js"></script>	
	<script src="javascripts/jquery.tweet.js"></script>	
	<script src="javascripts/jquery.tipsy.js"></script>
	<script src="javascripts/custom_tipsy.js"></script>
	
	<script type="text/javascript">
	$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).data('rel'));
    });
	</script>
	
	<script type="text/javascript">
			
			$('#carousel').elastislide({
				imageW 	: 180,
				minItems	: 5
			});
			
	</script>


	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
    </script>

    <script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "envato",
            join_text: "auto",
            avatar_size: 32,
            count: 2,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });
    </script>

    <script type='text/javascript'>
    jQuery(function($){
    	var currentTime = new Date();
		var year = currentTime.getFullYear();
		if(year!=2012){
			$("#year_now").text("-"+year);
		}

    });
    </script>


<!-- End Document
================================================== -->
</body>
</html>