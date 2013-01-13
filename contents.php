<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  <head>
    <?php include 'controllers/contents_controller.php';?>

 <!-- Basic Page Needs
  ================================================== -->   

 <?php include 'metas.php' ?>

 <!-- Favicons
 ================================================== -->
 <link rel="shortcut icon" href="images/<?php echo strtolower($site_name); ?>_fav.ico">
 <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
 <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
 
 <link rel="stylesheet" href="stylesheets/tinyscrollbar.css">
 <link href="royalslider/royalslider.css" rel="stylesheet">

 <!-- preview-related stylesheets -->
 <link href="preview-assets/css/reset.css" rel="stylesheet">
 <link href="preview-assets/css/grid.css" rel="stylesheet">
 <link href="preview-assets/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet">
 <link href="preview-assets/css/github.css" rel="stylesheet">
 <link href="preview-assets/css/main.css" rel="stylesheet">

 <!-- slider stylesheets -->
 <link href="royalslider/default/rs-default.css" rel="stylesheet">
 <link href="preview-assets/js/colorbox/colorbox.css" rel="stylesheet">



 <style>
 .pics { height: 200px; width: 200px; padding:0; margin:0; overflow: hidden }
 .pics img { height: 200px; width: 200px; padding: 10px; border: 1px solid #ccc; background-color: #eee; top:0; left:0 }
 .pics img {
     -moz-border-radius: 10px; -webkit-border-radius: 10px;
 }
 </style>
 
 <!-- slider JS files -->
    

 <script  src="royalslider/jquery-1.8.0.min.js"></script>
 <script src="royalslider/jquery.royalslider.min.js"></script>
 <script src="preview-assets/js/colorbox/jquery.colorbox.js"></script>
 
 
 <!-- syntax highlighter -->
 <script src="preview-assets/js/highlight.pack.js"></script>
 
 <script> hljs.initHighlightingOnLoad();</script>
 
 <script src="javascripts/jquery.cycle.lite.js"></script>
 <script src="javascripts/jquery.tinyscrollbar.min.js"></script>
 
 <!-- tipsy js -->
 
 <script src="javascripts/jquery.tweet.js"></script> 
 <script src="javascripts/jquery.tipsy.js"></script>
 <script src="javascripts/custom_tipsy.js"></script>

    
     
  </head>
  <body >
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
 <div class="container">

   <div class="sixteen columns">
   <div class="five columns" style="visibility:hidden">&nbsp;</div>
   <div class="ten columns">
         <h4><?php echo $contentTitle ?></h4>
     </div>
   </div>
   
   <div class="sixteen columns">

   <div class="four columns alpha">
       <div id="colorbox-items">
         <a class="colorboxSlider openBoxButton cboxElement" href="ajax-sliders/simple-slider.html" rel="">
         <div id="circle_photos" class="four columns pics">
           <img src="images/works/2_mini.jpg" class="med-fade scale-with-grid" alt="">
           <img src="images/works/3_mini.jpg" class="med-fade scale-with-grid" alt="">
           <img src="images/works/4_mini.jpg" class="med-fade scale-with-grid" alt="">
         </div>
         </a>
       </div>
   </div>
   <div class="twelve columns alpha">
     <div id="scrollbar1">
    <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
        <div class="overview">
             <?php include('languages/'.$lang.'/body.php'); ?>
        </div>
    </div>
</div> <!-- fine scrollbar -->
</div>

      </div>


  </div><!-- End Container -->
  </div><!-- End Wrap FeatureInfo -->

  <div class="wrap mainseperateline"><!-- Start Wrap MainSeperateLine -->
  <div class="container">


    <div class="sixteen columns mainsepline">

    </div>

  </div><!-- End Container -->
  </div><!-- End Wrap MainSeperateLine -->

       <div class="wrap lastfooterbody"><!-- Start Wrap LastFooterBody -->
    <div class="container">

     <?php include('footer.php') ?>

  </div><!-- End Container -->
  </div><!-- End Wrap LastFooterBody -->
 
    <script id="addJS">jQuery(document).ready(function($) {
  var win = $(window),
      w,
      cContent = $('#cboxLoadedContent'),
      currRs;
  $('#colorbox-items').on('click', '.colorboxSlider', function(e) {
      e.preventDefault();
      $.colorbox({
          preloading: true,
          modal: true,
          transition: 'none',
          speed: 0,
          onComplete: function(e) {
            currRs = $('#cboxLoadedContent').find('.royalSlider').royalSlider({
              imageScaleMode: 'fill',
              keyboardNavEnabled: true,
              video: {
                autoHideControlNav: true
              }
            }).data('royalSlider');
            updateLightboxSize();
          },
          href:$(this).attr('href')
      });
      return false;
  });

  win.resize( function() {
     updateLightboxSize();
  });

  // dynamic lightbox resizing
  function updateLightboxSize() {
     w = win.width();
      if(w > 1200) {
        w = '700px';
      } else if(w < 800) {
        w = '90%';
      } else {
        w = '60%';
      }
       $.colorbox.resize({
           width: w
       });
      if(currRs) {
        currRs.updateSliderSize();
      }
  }
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $('#circle_photos').cycle();
        $('#scrollbar1').tinyscrollbar();

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
  
  </div>
  </body>
</html>
