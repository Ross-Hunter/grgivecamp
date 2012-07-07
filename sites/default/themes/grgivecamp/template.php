<?php

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Allow themable wrapping of all comments.
 */
function phptemplate_comment_wrapper($content, $node) {
  if (!$content || $node->type == 'forum') {
    return '<div id="comments">'. $content .'</div>';
  }
  else {
    return '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
  $vars['tabs2'] = menu_secondary_local_tasks();
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  return menu_primary_local_tasks();
}

function phptemplate_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

function phptemplate_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

function phptemplate_get_960_styles() {
  $css = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/stylesheets/reset.css" />';
  $css .= '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/stylesheets/960.css" />';
  $css .= '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/stylesheets/text.css" />';
  $css .= '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/stylesheets/debug.css" />';
  return $css;
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  return '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/stylesheets/fix-ie.css" />';
}

function grgivecamp_total_value() {
  $HOURLY_RATE = 100.00;
  $TOTAL_HOURS = 48;
  
  $amount = "\$" . number_format(grgivecamp_total_volunteers() * $HOURLY_RATE * $TOTAL_HOURS, 2);
  return $amount;
}

function grgivecamp_total_volunteers() {
  $tech_count = grgivecamp_technical_volunteer_submissions()->count;  
  $non_tech_count = grgivecamp_non_technical_volunteer_submissions()->count;
  
  return ($tech_count + $non_tech_count);  
}

function grgivecamp_non_profit_submissions() {
  return grgivecamp_submissions_count(34);
}

function grgivecamp_non_technical_volunteer_submissions() {
  return grgivecamp_submissions_count(35);
}

function grgivecamp_technical_volunteer_submissions() {
  return grgivecamp_submissions_count(33);
}

function grgivecamp_submissions_count($nid) {
  $query = 'SELECT nid, COUNT(*) AS count FROM {webform_submissions} WHERE nid = %d';
  $result = db_query($query, $nid);
  return db_fetch_object($result);
}

function grgivecamp_2011_sponsors() {
  $sponsors = array(
    array("name" => "Microsoft", "class" => "microsoft", "url" => "http://microsoft.com"),
    array("name" => "Adam Bird", "class" => "adam_bird", "url" => "http://adambirdphoto.com"),
    array("name" => "Clark Communications", "class" => "clark", "url" => "http://www.clarkcommunication.com"),
    array("name" => "Discount ASP.net", "class" => "discountasp", "url" => "http://www.discountasp.net"),
    array("name" => "Madcap Coffee", "class" => "madcap", "url" => "http://www.madcapblog.com"),
    array("name" => "Component One", "class" => "componentone", "url" => "http://www.componentone.com"),
    array("name" => "Applied Innovation", "class" => "appliedi", "url" => "http://www.appliedi.net"),
    //array("name" => "Twisted Rooster", "class" => "twisted", "url" => "http://www.twisted-rooster.com"),
    array("name" => "Dev Express", "class" => "devexpress", "url" => "http://www.devexpress.com"),
    array("name" => "O'Reilly", "class" => "oreilly", "url" => "http://www.oreilly.com"),
    array("name" => "Redgate", "class" => "redgate", "url" => "http://www.red-gate.com"),
    array("name" => "DevPro", "class" => "devpro", "url" => "http://www.devproconnections.com"),
    array("name" => "Kentico", "class" => "kentico", "url" => "http://www.kentico.com"),
    array("name" => "Techsmith", "class" => "techsmith", "url" => "http://www.techsmith.com"),
    array("name" => "Telerik", "class" => "telerik", "url" => "http://www.telerik.com"),
    array("name" => "Comcast", "class" => "comcast", "url" => "http://www.comcast.com"),
  );
  
  shuffle($sponsors);
  return $sponsors;
}
