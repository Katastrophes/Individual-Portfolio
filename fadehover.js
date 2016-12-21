var $j = jQuery.noConflict();

$j(function() {
  $j(".img-responsive").hover(function() {
    $j(this).animate({
      opacity: 0.2
    });
  }, function() {
    $j(this).stop(true, true).animate({
      opacity: 1
    });
  });
});