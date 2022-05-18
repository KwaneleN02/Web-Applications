<?php
     require_once './Includes/bootstrap.php'; 
 ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!DOCTYPE html>
  <html lang="en">
    <?php  require './Includes/heading.php'; ?>
  <body> 
  <div class="tab-items">

    <!---------------------------------------- Side-Nav--------------------------->

      <?php  require './Includes/side-nav.php'; ?>

    <!---------------------------------------- Tab-Contents--------------------------->
    <div class="tab-content">
    <!---------------------------------------- Dashboard------------------------- -->
      <?php  require './Includes/dash-tab.php'; ?>

    <!---------------------------------------- Forecasts------------------------- -->
      <?php  require './Includes/forecast-tab.php'; ?>
    <!---------------------------------------- Over-Under ------------------------- -->

      <?php  require './Includes/over-under-tab.php'; ?>
     
    <!---------------------------------------- ------------------------- -->

    </div>

  </div>

  <?php  require './Includes/scripts.php'; ?>


  </body>
</html>
