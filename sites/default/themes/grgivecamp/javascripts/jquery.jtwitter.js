/*
 * jTwitter 1.0 - Twitter API abstraction plugin for jQuery
 *
 * Copyright (c) 2009 jQuery Howto
 *
 * Licensed under the GPL license:
 *   http://www.gnu.org/licenses/gpl.html
 *
 * URL:
 *   http://jquery-howto.blogspot.com
 *
 * Author URL:
 *   http://me.boo.uz
 *
 */
(function($){
  $.extend({
    jTwitter : function(username, fnk){
      var url = "http://twitter.com/status/user_timeline/"
            + username + ".json?count=1&callback=?";
      var info = {};
      $.getJSON(url, function(data){
        if(typeof fnk == 'function') fnk.call(this, data[0]);
      });
    }
  });
})(jQuery);

$(document).ready($.jTwitter('grgivecamp', function(data){
  $('.header .twitter_message').html(
    "<span>@<a href=\"http://twitter.com/" + data.user.screen_name + "\">" + data.user.screen_name + "</a></span> " + data.text
  );
}));