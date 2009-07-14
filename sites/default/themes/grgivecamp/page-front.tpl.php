<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?> : Grand Rapids GiveCamp</title>
  <?php print $head ?>
  <?= phptemplate_get_960_styles(); ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if lt IE 7]>
    <?= phptemplate_get_ie_styles(); ?>
  <![endif]-->
</head>
<body class="<?php print $body_classes; ?>">
  
<div class="header">
  <div class="container_12">    
    <h1><a href="<?= check_url($front_page) ?>" title="<?= check_plain($site_name) ?>"><?= check_plain($site_name) ?></a></h1>

    <?php if($site_slogan): ?>
      <p class="site_slogan"><?= check_plain($site_slogan) ?></p>
    <?php endif; ?>

    <?php if(isset($primary_links)): ?>
      <?= theme('links', $primary_links, array('class' => 'links primary_links')) ?>
    <?php endif; ?>
    
    <?php if(isset($secondary_links)): ?>
      <?= theme('links', $secondary_links, array('class' => 'links secondary_links')) ?>
    <?php endif; ?>
  </div>
</div>

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
