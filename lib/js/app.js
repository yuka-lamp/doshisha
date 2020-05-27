// Scroll event
$(window).on('load scroll', function() {
  var s = $(window).scrollTop();
  if (s >= 400) {
    $('#header').addClass('scroll-on');
    $('#header .logo img').attr('src', '<?php echo $wp_url;?>/lib/images/commonlogo_color.svg');
  } else {
    $('#header').removeClass('scroll-on');
    $('#header .logo img').attr('src', '<?php echo $wp_url;?>/lib/images/commonlogo_fff.svg');
  }
});
