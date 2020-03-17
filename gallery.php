<?php
 $current="gallery";
 $title="Gallery :: Manatharam";
  require 'templates/header.php';

 ?>


      <main class="container-fluid pt-0 bg-white single-page">
        <div class="row page-title">
          <div class="container">
            <div class="row py-5">
              <h1 class="col-12 text-center">Gallery</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="container p-5" id="Gallery" style="">
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Exterior2.jpg"><img src="http://abvichico.com/images/thumb/Exterior2.jpg" alt="Exterior"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Lobby1.jpg"><img src="http://abvichico.com/images/thumb/Lobby1.jpg" alt="Lobby"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room2.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room2.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room4.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room4.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room6.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room6.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room8.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room8.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room9.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room9.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Room5.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Room5.jpg" alt="Guest Room"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Guest%20Bathroom2.jpg"><img src="http://abvichico.com/images/thumb/Guest%20Bathroom2.jpg" alt="Guest Bathroom"/></a>
            </div>
            <div class="gallery-item">
              <a href="http://abvichico.com/images/full/Pool3.jpg"><img src="http://abvichico.com/images/thumb/Pool3.jpg" alt="Pool"/></a>
            </div>
          </div><!--end #Gallery-->
        </div>

      </main>

<script src="https://abvichico.com/js/simple-inheritance.min.js" charset="utf-8"></script>
<script src="https://abvichico.com/js/code-photoswipe-1.0.11.min.js" charset="utf-8"></script>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){
Code.photoSwipe('a', '#Gallery', { captionAndToolbarHideOnSwipe: false } );
}, false);

</script>
<?php

  require 'templates/footer.php';

 ?>
