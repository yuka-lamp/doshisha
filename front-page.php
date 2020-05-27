<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="top-news" class="sec">
<div class="wrap">
  <div class="flex">
    <h2 class="ttl2"><span class="eng upper">NEWS</span>ニュース</h2>
    <div class="btn-nomal">
      <a class="eng upper"href="<?php echo $home; ?>/news">view more</a>
    </div>
  </div>
  <ul>
    <li>
      <a href="<?php echo $home; ?>/news">
        <div class="">
          <p>2020.01.01</p>
          <p class="cat">お知らせ</p>
        </div>
        <p>おしらせないよう</p>
      </a>
    </li>
    <li>
      <a href="<?php echo $home; ?>/news">
        <div class="">
          <p class="eng">2020.01.01</p>
          <p class="cat">お知らせ</p>
        </div>
        <p>おしらせないよう</p>
      </a>
    </li>
    <li>
      <a href="<?php echo $home; ?>/news">
        <div class="">
          <p>2020.01.01</p>
          <p class="cat">お知らせ</p>
        </div>
        <p>おしらせないよう</p>
      </a>
    </li>
  </ul>
</div>
</section>

<section id="top-research" class="sec">
<div class="wrap">
  <h2 class="ttl2"><span class="eng upper">research</span>研究コラム・成果</h2>
  <ul class="flex">
    <li>
      <a href="#">
        <div class="img-wrap">
          <img src="<?php echo $wp_url; ?>/lib/images/top/sample.png" alt="タイトル">
        </div>
        <p class="eng">2020.01.01</p>
        <h3>日本人の胃がんリスクとなる遺伝的背景と生活習慣～人種横断的大規模胃がんゲノム解析の成果～</h3>
      </a>
    </li>

  </ul>
  <div class="btn-border">
    <a class="eng upper"href="<?php echo $home; ?>/research">view more</a>
  </div>
</div>
</section>
<?php get_footer();
