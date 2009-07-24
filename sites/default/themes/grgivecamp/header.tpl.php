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

    <div class="twitter_icon"></div>
    <div class="twitter_message"></div>

    <?php if($site_slogan): ?>
      <p class="site_slogan grid_7"><?= check_plain($site_slogan) ?></p>
    <?php endif; ?>

    <?php if(isset($primary_links)): ?>
      <?= theme('links', $primary_links, array('class' => 'links primary_links')) ?>
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
    
    <div id="primary-givecamp-2009-dropdown" class="primary-dropdown">
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/2009">GiveCamp 2009</a></dt>
          <dd>Find more details about the upcoming GiveCamp 2009: November 13-15.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">    
          <dt><a href="/2009/get-involved">Get Involved</a></dt>
          <dd>Learn how you can get involved with GiveCamp.  We need volunteer helpers, developers, designers, usability experts, project managers, sponsors...etc.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">
          <dt><a href="/2009/non-profits-and-charities">Non-Profits/Charities</a></dt>
          <dd>Are you a non-profit/charity that needs help with technology?  Find out more about how you can apply and get help from our volunteers.</dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">      
          <dt><a href="/2009/sponsors">Sponsors</a></dt>
          <dd>Learn how you or your organization can sponsor GiveCamp. <span>(Psss... We'll make sure everyone knows)</span></dd>
        </dl>
      </div>
      <div class="link">
        <dl class="clearfix">      
          <dt><a href="/2009/organizers">Organizers</a></dt>
          <dd>Find out more about the awesome individuals who are organizing GiveCamp 2009.</dd>
        </dl>
      </div>      
      <div class="link">
        <dl class="clearfix">      
          <dt><a href="/2009/schedule">Schedule</a></dt>
          <dd>Find out more about the details of activities and scheduled events during the three day camp.</dd>
        </dl>
      </div>      
      <div class="link">
        <dl class="clearfix">      
          <dt><a href="/2009/venue">Venue</a></dt>
          <dd>Learn where GiveCamp 2009 will be held this year.</dd>
        </dl>
      </div>            
    </div>    
    
    <?php if(isset($secondary_links)): ?>
      <?= theme('links', $secondary_links, array('class' => 'links secondary_links')) ?>
    <?php endif; ?>
  </div>
</div>