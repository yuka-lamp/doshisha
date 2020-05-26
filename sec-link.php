<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="py-5">
<ul>
  <li>
    <a class="" href="<?php echo $home; ?>/donation"><span class="eng">donation</span>寄付について</a>
  </li>
  <li>
    <a class="" href="<?php echo $home; ?>/recruitment"><span class="eng">recruitment</span>研究員募集</a>
  </li>
  <li>
    <a class="" href="<?php echo $home; ?>/request"><span class="eng">request</span>講演・調査依頼 / その他お問い合わせ</a>
  </li>
</ul>
</section>
<?php get_footer();
