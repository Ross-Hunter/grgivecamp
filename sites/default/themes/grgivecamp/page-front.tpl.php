<?php include('header.tpl.php'); ?>

<div class="feature_wrapper clearfix">
  <div class="feature tab4 container_12 clearfix">
    <div class="tabs clearfix">
      <div class="tab non-profit tab1 grid_12 clearfix">
        <div class="content">
          <h3>Non-Profit</h3>
          <p class="grid_8"><a href="">We've selected 25 non-profits to help this year! Find out who were chosen.</a></p>
          <p class="grid_8">Does your non-profit need a new website? Time to escape those Excel spreadsheets and get a real donor database? Trying to figure out how to build your social media presence? GiveCamp is for you.</p>
          <p class="grid_8">Join us for a weekend-long volunteer event that brings together nearly 100 technology professionals committed to providing your organization with solutions, strategies, and tools that can help you continue your good work.</p>
          <!-- <div class="links grid_6">
            <a href="/2009/get-involved/non-profit-application/closed" class="button">Apply Now</a> or <a href="/2009/non-profits">find out how we can help</a>
          </div> -->
        </div>
      </div>
      <div class="tab volunteer tab2 grid_12 clearfix">
        <div class="content">
          <h3>Technical Volunteer</h3>
          <p class="grid_8">Ready to connect with the local tech community for a good cause? GiveCamp needs your support and skills. For one weekend in November, we’ll take on the technology wish lists of 20 non-profit organizations. We’re looking for a variety of volunteers: graphic or UX designers, developers with .NET/Java/LAMP/Open Source/CMS experience, project managers, system/network administrators, DBAs, and non-profit technical consultants and web strategists.</p>
          <div class="links grid_6">
            <a href="/2009/get-involved/tech-volunteer-signup" class="button">Signup to Volunteer</a> or <a href="/2009/get-involved">find out how you can help</a>
          </div>
        </div>
      </div>
      <div class="tab helper tab3 grid_12 clearfix">
        <div class="content">
          <h3>Non-Technical Volunteer</h3>
          <p class="grid_8">It’s not just about the technology – there are a lot of other aspects that help GiveCamp run smoothly. We need non-technical volunteers to run errands, help with setting up and cleaning up, and everything in between. Whether you can offer a couple hours of your time or join GiveCamp for a couple days, your support is needed!</p>
          <div class="links grid_6">
            <a href="/2009/get-involved/non-tech-volunteer-signup" class="button">Signup to Volunteer</a> or <a href="/2009/get-involved">find out how you can help</a>
          </div>
        </div>    
      </div>
      <div class="tab sponsor tab4 grid_12 clearfix">
        <div class="content">
          <h3>Sponsor</h3>
          <p class="grid_8">As a GiveCamp sponsor, you help connect the talent of local technology professionals with the needs of local non-profit organizations. In the course of one weekend, almost 20 projects will be completed at no cost to participating organizations. There are many ways to support this work – become a sponsor and ensure GiveCamp is a continued success.</p>
          <div class="links grid_6">
            <a href="/2009/sponsors/application" class="button">Become a sponsor</a> or <a href="/2009/sponsors">find out more about GiveCamp</a>
          </div>
        </div>    
      </div>    
    </div>
    <ul class="container_12">
      <li class="grid_3 tab1"><a href="/2009/non-profits">Non-Profit</a></li>
      <li class="grid_3 tab2"><a href="/2009/get-involved">Technical Volunteer</a></li>
      <li class="grid_3 tab3"><a href="/2009/get-involved">Non-Technical Volunteer</a></li>
      <li class="grid_3 tab4"><a href="/2009/sponsors">Sponsor</a></li>
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
