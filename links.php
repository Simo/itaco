<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <?php include 'controllers/links_controller.php';?>
  <!-- Basic Page Needs
  ================================================== -->
  
  <?php include 'metas.php' ?>

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/<?php echo strtolower($site_name); ?>_fav.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


    <!-- slider JS files -->
    
    <link href="stylesheets/royalslider.css" rel="stylesheet">
    <script  src="javascripts/jquery-1.8.0.min.js"></script>
    <script src="javascripts/jquery.royalslider.min.js"></script>
    
    

    
    <!-- syntax highlighter -->
    <script src="preview-assets/js/highlight.pack.js"></script>
    <script src="preview-assets/js/jquery-ui-1.8.22.custom.min.js"></script>
    <script> hljs.initHighlightingOnLoad();</script>


    

    <!-- preview-related stylesheets -->
    <link href="preview-assets/css/reset.css" rel="stylesheet">
    <link href="preview-assets/css/grid.css" rel="stylesheet">
    <link href="preview-assets/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet">
    <link href="preview-assets/css/github.css" rel="stylesheet">

    <!-- slider stylesheets -->
    
     
        <link href="royalslider/default/rs-default.css" rel="stylesheet">
     
    

    <link href="preview-assets/css/main.css" rel="stylesheet">

    
    <!-- slider css -->
    <style>
      #video-gallery {
  width: 100%;
  color: #FFF;
}
.videoGallery .rsCloseVideoBtn {
  display: none;
} 
/* Styling thumbnails */
.videoGallery h5 {
  margin: 0;
  font-family: "century gothic";
}
.videoGallery p {
  color: #ddd;
  font-size: 13px;
}
.videoGallery .rsTmb {
  padding: 20px;
}

.videoGallery .rsThumbs .rsThumb {
  width: 220px;
  height: 80px;
  border-bottom: 1px solid #FFFFFF;
}
.videoGallery .rsThumbs.rsThumbsVer {
  width: 220px;
  padding: 0;
}
.videoGallery .rsThumb:hover {
  background: #000;
}
.videoGallery .rsThumb.rsNavSelected {
  background-color: #A3A3A3;
  border-bottom: 1px solid #FFFFFF;
}

.rsDefault .rsOverflow,
.rsDefault .rsSlide,
.rsDefault .rsVideoFrameHolder,
.rsDefault .rsThumbs {
  background: #E3E3E3;
}

.sampleBlock {
  background-color: #000000;
  left: 80%; 
  top: 80%; 
  width: 100%;
  max-width: 400px;
}


@media screen and (min-width: 0px) and (max-width: 500px) {
  .videoGallery .rsTmb {
    padding: 6px 8px;
  }
  .videoGallery h5 {
    font-size: 13px;
    line-height: 17px;
  }
  .videoGallery .rsThumbs.rsThumbsVer {
    width: 100px;
    padding: 0;
  }
  .videoGallery .rsThumbs .rsThumb {
    width: 100px;
    height: 47px;
  }
  .videoGallery .rsTmb p {
    display: none;
  }
  .videoGallery .rsOverflow,
  .royalSlider.videoGallery {
    height: 300px !important;
  }
  .sampleBlock {
    font-family: "century gothic";
    font-size: 14px;
  }
}


a.collegamento {
  position:relative;
  left: 10%;
  text-decoration: none;
  color: #F26221;
  
}

    </style>
    
  </head>
  <body >
    


  <!-- Primary Page Layout
  ================================================== -->

  <div class="wrap topbar"><!-- Start Wrap Tobar -->
  </div><!-- End Wrap Topbar -->

  <div class="wrap topheader"><!-- Start Wrap TopHeader -->
  <div class="container">

    <?php include 'header.php';?>

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
  
  <div id="contents4all"><!-- Start Wrap container4all -->
    <div class="container">
    <div class="sixteen columns">

      <?php include 'wrapper.php'; ?>

    </div>  
  </div>
  </div><!-- End contents4all -->

<div class="wrap lastfooterbody"><!-- Start Wrap LastFooterBody -->
    <div class="container">

      <?php include 'footer.php';?>

  </div><!-- End Container -->
  </div><!-- End Wrap LastFooterBody -->



  <!-- JS
  ================================================== -->
  <script src="javascripts/tabs.js"></script>
  <script src="javascripts/jquery.tipsy.js"></script>
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
  <script>
    jQuery(document).ready(function(e) {
        var code = $('#html-code code');
        if(code.is(':empty')) {
          var rsCode = $('.royalSlider-preview');
          if(!rsCode.length) {
              rsCode = $('.royalSlider');
          }
          rsCode = rsCode.clone().removeClass('royalSlider-preview').wrap('<div></div>').parent().html();
          rsCode = htmlencode(rsCode);
          code.html(rsCode);
        }
        $('#js code').html( htmlencode($('#addJS').html()) );
        $( ".tabs" ).tabs();
    });
    function htmlencode(str) {
      if(str) {
         return str.replace(/[&<>"']/g, function($0) {
            return "&" + {"&":"amp", "<":"lt", ">":"gt", '"':"quot", "'":"#39"}[$0] + ";";
        });
      }
    }   
  </script>
  
   
  
    <script id="addJS">jQuery(document).ready(function($) {
  $('#video-gallery').royalSlider({
    arrowsNav: false,
    fadeinLoadedSlide: true,
    controlNavigationSpacing: 0,
    controlNavigation: 'thumbnails',

    thumbs: {
      autoCenter: false,
      fitInViewport: true,
      orientation: 'vertical',
      spacing: 0
    },
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    imageAlignCenter:true,
    loop: false,
    loopRewind: true,
    numImagesToPreload: 3,
    video: {
      autoHideArrows:true,
      autoHideControlNav:false,
      autoHideBlocks: true
    }, 
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 450
  });
});
</script>

<script type="text/javascript">
  $('span.collegamento').click(function(e){
    e.preventDefault();
    document.location.href = $(this).attr('name');
  });
</script>

  </body>
</html>
