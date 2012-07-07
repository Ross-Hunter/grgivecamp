<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

  <title><?php print $head_title ?> : Grand Rapids GiveCamp</title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if IE]>
    <?php phptemplate_get_ie_styles(); ?>
  <![endif]-->
</head>
<body class="<?php print $body_classes; ?>">

<div class="header">
  <div class="header_wrapper container_12">
    <h1><a href="/" title="<?php check_plain($site_name) ?>"><?php check_plain($site_name) ?></a></h1>

    <div class="twitter_icon"></div>
    <div class="twitter_message"></div>

    <?php if($site_slogan): ?>
      <p class="site_slogan grid_7"><?php check_plain($site_slogan) ?></p>
    <?php endif; ?>

    <?php if(isset($primary_links)): ?>
      <?php print theme('links', $primary_links, array('class' => 'links primary_links')) ?>
    <?php endif; ?>

    <div id="primary-about-dropdown" class="primary-dropdown">
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/about">About</a></dt>
          <dd>Find out about what GiveCamp is all about</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/about/faq">Frequently Asked Questions</a></dt>
          <dd>We've already answered many questions that others have asked.  Check it out and let us know if you still have any questions.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/about/news">Recent News</a></dt>
          <dd>Find out what's happening with the Grand Rapids GiveCamp.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/about/media">Media</a></dt>
          <dd>Are you part of the Media?  Click here to find resources and news made easy for your consumptions.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/about/other">Other GiveCamps</a></dt>
          <dd>We've already answered many questions that others have asked.  Check it out and let us know if you still have any questions.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="mailto:info@grgivecamp.org">Contact Us</a></dt>
          <dd>Send us a note if you have any questions or suggestions.  We'd love to hear from you.</dd>
        </dl>
      </div>
    </div>

    <div id="primary-givecamp-dropdown" class="primary-dropdown">
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/event">GiveCamp 2012</a></dt>
          <dd>Find more details about the upcoming GiveCamp 2012 October 24-26.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/venue">Venue/Location</a></dt>
          <dd>Learn more about our upcoming venue.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/schedule">Schedule</a></dt>
          <dd>Find out more about what the days will look like during the three day camp.</dd>
        </dl>
      </div>
    </div>

    <?php if(isset($secondary_links)): ?>
      <?php print theme('links', $secondary_links, array('class' => 'links secondary_links')) ?>
    <?php endif; ?>
  </div>
</div>
