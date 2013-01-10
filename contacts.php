<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php include 'controllers/contacts_controller.php';?>
	<!-- Basic Page Needs
  ================================================== -->
	
	<?php include 'metas.php' ?>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/<?php echo strtolower($site_name); ?>_fav.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	

</head>
<body>


	<!-- Primary Page Layout
	================================================== -->

  <div class="wrap topbar"><!-- Start Wrap Tobar -->
  </div><!-- End Wrap Topbar -->

  <div class="wrap topheader"><!-- Start Wrap TopHeader -->
	<div class="container">

		<?php include 'header.php'; ?>

	</div><!-- End Container -->
  </div><!-- End Wrap TopHeader -->


  <div class="wrap seperateline"><!-- Start Wrap SeperateLine -->
	<div class="container">

		<div class="sixteen columns sepline">


		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap SeperateLine -->

  <div class="wrap mainseperateline"><!-- Start Wrap MainSeperateLine -->
	<div class="container">

		<div class="sixteen columns mainsepline">


		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap MainSeperateLine -->
  

  <div class="wrap featureinfo"><!-- Start Wrap FeatureInfo -->
	<div class="container" style="height:428px;">
		
	<div class="sixteen columns">
		<?php include 'process-form.php'; ?>
		<div class="six columns" style="border:1px solid #e3e3e3;padding-left:15px;padding-top:15px;margin-top:20px">
			<div class="message">
			            <?php echo !empty($error_list) ? $error_list : ''; ?>
			            </div>
			<form id="contact-form" action="" method="post" novalidate>

                <fieldset>

                    <div class="field">
                        <label for="name"><?php echo $form_name; ?></label>
                        <input type="text" id="name" name="name" autofocus required="required"
                               title="Your first and last name">
                    </div>

                    <div class="field">
                        <label for="email"><?php echo $form_email; ?></label>
                        <input type="email" id="email" name="email" required="required" title="We will respond to this address">
                    </div>

                    <div class="field">
                        <label for="contact_reason"><?php echo $form_object; ?></label>
                        <input type="text" id="contact_reason" name="contact_reason" required="required" title="Tell us how we can we help you">
                        
                    </div>

                    <div class="field">
                        <label for="message"><?php echo $form_message; ?></label>
                        <textarea id="message" name="message" cols="15" rows="5" required="required"
                                ></textarea>
                    </div>

                    <div class="field submit">
                        <input type="submit" value="<?php echo $form_submit; ?>"/>
                    </div>

                </fieldset>

            </form>
		</div>
		<div class="nine columns">
			<div class="four columns" style="border-bottom: 1px solid #E3E3E3">
					
				 <div class="street-address"><h3>ITACO</h3>123 via immaginaria, Suite 200 <br/>Atlanta, GA 30314</div>
			</div>
			<div class="four columns" style="padding-left:6%;">
				
		            <!-- This is the container for the map -->
		            <div id="map-outer">
		                <div id="map">&nbsp;</div>
		            </div>
				
			</div>
			<div class="four columns" style="border-bottom: 1px solid #E3E3E3">

				 <div class="street-address"><h3>ITACO</h3>123 via strana, 1 <br/>Tavagnacco, IT, 33010</div>
			</div>
			<div class="four columns" style="padding-left:6%;">
				
		            <!-- This is the container for the map -->
		            <div id="map-outer-2">
		                <div id="map-2"></img>&nbsp;</div>
		            </div>

			</div>
		</div>
	</div>
	<div style="display:none">
		<span id="company-street-address"><?php echo $company_address_1;?></span>
		<span id="company-street-address-2"><?php echo $company_address_2;?></span>
	</div>
	</div><!-- End Container -->
  </div><!-- End Wrap FeatureInfo -->



      <div class="wrap lastfooterbody"><!-- Start Wrap LastFooterBody -->
	  <div class="container">

	  	<?php include 'footer.php'; ?>

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
	<script src="javascripts/main.js"></script>
    <script src="javascripts/custom_tipsy.js"></script>
	
	<script type="text/javascript">
	$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).data('rel'));
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