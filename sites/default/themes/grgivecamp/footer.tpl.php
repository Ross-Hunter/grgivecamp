<div class="sponsors clearfix">  
  <div class="container_12">
    <div class="grid_12">
      <h4>Sponsors</h4>
      <div class="logos infinite_carousel">
        <div class="wrapper">
          <ul>
            <?php foreach(grgivecamp_2009_sponsors() as $sponsor): ?>
              <li><a class="<?= $sponsor['class'] ?>" href="<?= $sponsor['url'] ?>"><?= $sponsor['name'] ?></a></li>
            <?php endforeach; ?>
          </ul>        
        </div>
      </div>
    </div>      
  </div>
</div>

<div class="footer clearfix">
  <div class="container_12">
    <div class="primary_menu grid_3">
      <h4><a href="/about">About</a></h4>
      <ul class="sub_menu">
        <li><a href="/about/faq">Frequently Asked Questions</li>
        <li><a href="/about/news">Recent News</li>
        <li><a href="/about/media">Media</li>
        <li><a href="/about/other">Other GiveCamps</li>
        <li><a href="mailto:info@grgivecamp.org">Contact Us</li>
      </ul>
    </div>
    
    <div class="primary_menu grid_3">
      <h4><a href="/2009">GiveCamp 2009</a></h4>
      <ul class="sub_menu">
        <li><a href="/2009/get-involved">Get Involved</a></li>
        <li><a href="/2009/non-profits">Non-Profits</a></li>
        <li><a href="/2009/sponsors">Sponsors</a></li>
        <li><a href="/2009/participants">Participants</a></li>
        <!-- <li><a href="/2009/schedule">Schedule</a></li> -->
        <li><a href="/2009/venue">Venue</a></li>
      </ul>
    </div>

    <div class="primary_menu grid_3">
      <h4>Links</h4>
      <ul class="sub_menu">
        <li><a href="http://givecamp.org">National GiveCamp</li>
        <li><a href="http://michigangivecamp.org">Michigan GiveCamp</li>
      </ul>
    </div>
    
    <div class="primary_menu grid_3">
      <h4>Follow Us</h4>
      <ul class="sub_menu">
        <li><a href="http://twitter.com/grgivecamp">Twitter</li>
        <li><a href="http://www.facebook.com/group.php?gid=112559611499">Facebook</a></li>
      </ul>
    </div>
    
    <div class="message grid_12">
      <p><?php print $footer_message ?></p>
    </div>
  </div>
</div>