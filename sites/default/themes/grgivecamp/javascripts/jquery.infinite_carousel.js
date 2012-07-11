$.fn.infiniteCarousel = function () {
    return this.each(function () {
        var $wrapper = $('> div', this).css('overflow', 'hidden'),
            $slider = $wrapper.find('> ul'),
            $items = $slider.find('> li'),
            $single = $items.filter(':first'),

            singleWidth = $single.outerWidth(),
            visible = Math.floor($wrapper.innerWidth() / singleWidth), // note: doesn't include padding or border
            pages = Math.ceil($items.length / visible),
            currentPage = 1;

        function gotoPage(page) {
            var direction = page < currentPage ? -1 : 1,
                page_number = Math.abs(currentPage - page),
                left = singleWidth * direction * visible * page_number;

            if (page === 0 || page > pages) {
            } else {
              $wrapper.filter(':not(:animated)').animate({
                  scrollLeft : '+=' + left
              }, 500, function() {
                currentPage = page;
                manageBackForwardState(currentPage);
              });
            }

            return false;
        }

        function manageBackForwardState(page) {
          if(page - 1 === 0) {
            $('a.back').removeClass('more');
          } else {
            $('a.back').addClass('more');
          }

          if(page + 1 > pages) {
            $('a.forward').removeClass('more');
          } else {
            $('a.forward').addClass('more');
          }
        }

        $wrapper.after('<a class="arrow back">&lt;</a><a class="arrow forward">&gt;</a>');
        manageBackForwardState(currentPage);

        $('a.back', this).click(function () {
            return gotoPage(currentPage - 1);
        });

        $('a.forward', this).click(function () {
            return gotoPage(currentPage + 1);
        });

        $(this).bind('goto', function (event, page) {
            gotoPage(page);
        });
    });
};

$(document).ready(function () {
  $('.infinite_carousel .view-content').infiniteCarousel();
});