<?php
  include('header.tpl.php');
?>

<div class="feature_wrapper clearfix">
  <div class="feature tab1 container_12 clearfix">
    <div class="tabs clearfix">
      <div class="tab non-profit tab1 grid_12 clearfix">
        <div class="content">
          <h3>Non-Profit &amp; Charities</h3>
          <p class="grid_5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <div class="links grid_6">
            <a href="" class="button">Submit Application</a> or <a href="">find out how we can help</a>
          </div>
        </div>
      </div>
      <!-- <div class="tab tab2 grid_12 clearfix">
    
      </div>
      <div class="tab tab3 grid_12 clearfix">
    
      </div>
      <div class="tab tab4 grid_12 clearfix">
    
      </div>     -->
    </div>
    <ul class="clearfix">
      <li class="grid_3 non-profit tab1"><a href="/2009/non-profits-and-charities">Non-Profit</a></li>
      <li class="grid_3 tab2"><a href="/2009/volunteer">Volunteer</a></li>
      <li class="grid_3 tab3"><a href="/2009/helper">Helper</a></li>
      <li class="grid_3 tab4"><a href="/2009/sponsor">Sponsor</a></li>
    </ul>
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
