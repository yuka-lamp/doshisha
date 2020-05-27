<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- <?php get_template_part('sec-link'); ?> -->

<!-- フッター -->
<footer id="footer">
  <div class="wrap">
    <div class="container">
      <div class="info">
        <p class="fff">〒602-8580<br>京都府京都市上京区今出川通烏丸東入る</p>
        <p><a class="fff" href="tel：075-0000-0000"><span class="eng">tel：</span>075-0000-0000</a></p>
      </div>
      <div class="under flex">
        <ul class="left flex">
          <li><a class="fff" href="<?php echo $home; ?>/contact">お問い合わせ　/　</li>
          <li><a class="fff" href="<?php echo $home; ?>/sitemap">サイトマップ　/　</li>
          <li><a class="fff" href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</li>
        </ul>
        <small class="right eng">Copyright(C) Doshisha University All Rights Reserved.</small>
      </div>
    </div>
  </div>
</footer>
<!-- フッター終了 -->
<!-- js -->
<script src="<?php echo $wp_url; ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/app.js"></script>
<script type="text/javascript">
  // Scroll event
  $(window).on('load scroll', function() {
    var s = $(window).scrollTop();
    if (s >= 400) {
      $('#header.main').addClass('scroll-on');
      $('#header.main .logo img').attr('src', '<?php echo $wp_url; ?>/lib/images/common/logo_color.svg');
    } else {
      $('#header.main').removeClass('scroll-on');
      $('#header.main .logo img').attr('src', '<?php echo $wp_url; ?>/lib/images/common/logo_fff.svg');
    }
  });
</script>
<!-- js終了 -->
<?php wp_footer(); ?>
</body>
</html>
