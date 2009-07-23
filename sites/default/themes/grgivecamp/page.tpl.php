<?php
  include('header.tpl.php');
?>

<div class="main container_12">
  <div class="wrapper clearfix">
    <div class="center grid_9">
      <div class="center_header clearfix">
        <?php print $breadcrumb; ?>
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clearfix">'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php if ($tabs): print '<ul class="tabs primary clearfix">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary clearfix">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
      </div>

      <div class="content clearfix">
        <?php print $help; ?>
        <div class="content_wrapper grid_8">
          <?php print $content ?>
        </div>
      </div>
      <?php print $feed_icons ?>
    </div>

    <?php if ($right): ?>
      <div class="sidebar sidebar-right grid_3">
        <?php if (!$left && $search_box): ?>
          <div class="block block-theme">
            <?php print $search_box ?>
          </div>
        <?php endif; ?>
        <?php print $right ?>
      </div>
    <?php endif; ?>
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
