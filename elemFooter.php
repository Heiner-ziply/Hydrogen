<?php
//A footer for consistent look and feel sitewide
if (!isset($footer_text)) $footer_text="<h4>Default footer text</h4>";
?>
<!-- shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
  <footer id="myFooter">
    <div class="w3-container w3-green w3-padding-32">
      <?php echo $footer_text; ?>

    </div>
    
      <?php 
        //Include javascript in each page's document ready function to make the button functional
        if (isset($settings['show_sql'])) {
          echo '<button id="ToggleSQL">Show/hide SQL</button>';
          echo '<div id="SQLEcho">' . $sql . "</div>"; 
        }
      ?>


    <div class="w3-container w3-blue">
      <p><a href="mailto:oss-db@ziply.com" target="_blank">mail your feedback</a></p>
    </div>
  </footer>
</div>



