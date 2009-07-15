<?php
  include('header.tpl.php');
?>

<div class="main container_12 clearfix">
  <div class="grid_12">
    <?php print $content ?>
  </div>
</div>
<div class="bottom container_12"></div>

<div class="footer">
  <div class="container_12">
    <p><?php print $footer_message . $footer ?></p>
  </div>
</div>

<?php print $closure ?>
</body>
</html>
