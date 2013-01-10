<div  class="page wrapper">    
  <!-- slider code start -->
    <div class="row clearfix">
      <div class="col span_6 fwImage">
        <div id="video-gallery" class="royalSlider videoGallery rsDefault">
          <?php 
            foreach ($links as $link) {
              echo '<div class="rsContent">'.
                '<a class="rsImg" data-rsVideo="https://vimeo.com/31240369" href="'.$link[2].'">'.
                  '<div class="rsTmb">'.
                    '<h5>'.$link[0].'</h5>'.
                    '<p>'.$link[1].'</p>'.
                  '</div>'.
                '</a>'.
                '<h3 class="rsABlock sampleBlock"><a class="collegamento" href="'.$link[3].'">'.$go.' ></a></h3>'.
              '</div>';
            }
          ?>
        </div>
    </div> <!-- chiude span6-->
    </div>
</div>