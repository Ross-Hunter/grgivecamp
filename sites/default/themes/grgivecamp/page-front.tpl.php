<?php
  include('header.tpl.php');
?>

<div class="feature_wrapper clearfix">
  <div class="feature tab1 container_12 clearfix">
    <div class="tabs clearfix">
      <div class="tab non-profit tab1 grid_12 clearfix">
        <div class="content">
          <h3>Non-Profit &amp; Charities</h3>
          <p class="grid_8">You're already too busy as is.  You know you need to update your website but you've pushed it off because your time and resources are limited and you need to care for your constituents first.  We're here to help.  We're gathering 100 technical geniuses to help your organization do what you do best and not worry about the technical stuff.</p>
          <div class="links grid_6">
            <a href="" class="button">Submit an application</a> or <a href="">find out how we can help</a>
          </div>
        </div>
      </div>
      <div class="tab volunteer tab2 grid_12 clearfix">
        <div class="content">
          <h3>Technical Volunteer</h3>
          <p class="grid_8">Ever wanted to give back to the community using the talents and skills you've acquired over the years?  Here's your chance.  We are looking for graphic or UX designers, developers with .NET/Java/LAMP/Open Source experience, project managers, system/network administrators, DBAs, non-profit consultants/strategists to get together and donate their time and expertise to non-profits and charities.</p>
          <div class="links grid_6">
            <a href="" class="button">Signup to Volunteer</a> or <a href="">find out how you can help</a>
          </div>
        </div>
      </div>
      <div class="tab helper tab3 grid_12 clearfix">
        <div class="content">
          <h3>Helper Volunteer</h3>
          <p class="grid_8">Give Camp is not just about artist, geeks and techies hacking in a dark room.  We need your support in running a successful charity camp. We are looking for self-less, amazing, wonderful people to help us organize, plan, and ultimately herd the geeks together and protect them from the elements.</p>
          <div class="links grid_6">
            <a href="" class="button">Signup to Volunteer</a> or <a href="">find out how you can help</a>
          </div>
        </div>    
      </div>
      <div class="tab sponsor tab4 grid_12 clearfix">
        <div class="content">
          <h3>Sponsor Give Camp</h3>
          <p class="grid_8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <div class="links grid_6">
            <a href="" class="button">Sponsor GiveCamp</a> or <a href="">find out more about GiveCamp</a>
          </div>
        </div>    
      </div>    
    </div>
    <ul class="clearfix">
      <li class="grid_3 tab1"><a href="/2009/non-profits-and-charities">Non-Profit</a></li>
      <li class="grid_3 tab2"><a href="/2009/volunteer">Volunteer</a></li>
      <li class="grid_3 tab3"><a href="/2009/helper">Helper</a></li>
      <li class="grid_3 tab4"><a href="/2009/sponsor">Sponsor</a></li>
    </ul>
  </div>
</div>

<div class="main container_12 clearfix">  
  <div class="grid_4">
    <?php print $frontpage_left ?>
  </div>
  <div class="grid_4">
    <?php print $frontpage_middle ?>
  </div>
  <div class="grid_4">
    <?php print $frontpage_right ?>
  </div>
</div>
<div class="bottom container_12"></div>

<?php include('footer.tpl.php') ?>

<?php print $closure ?>
</body>
</html>
