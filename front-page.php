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
    <?php
    $arg = array(
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'news',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <?php foreach ($posts as $post): setup_postdata($post);
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="">
          <p><?php the_time('Y-m-d'); ?></p>
          <p class="cat">></p>
        </div>
        <p><?php the_title(); ?></p>
      </a>
    </li>
    <?php endforeach; ?>
    <?php endif; wp_reset_postdata(); ?>
  </ul>
</div>
</section>

<section id="top-research" class="sec">
<div class="wrap">
  <h2 class="ttl2"><span class="eng upper">research</span>研究コラム・成果</h2>
  <ul class="flex">
    <?php
    $arg = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'news',
    );
    $posts = get_posts($arg);
    $terms = get_terms( 'news-cat');
    if ($posts): ?>
    <?php foreach ($posts as $post): setup_postdata($post);
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
          <img src="<?php echo $wp_url; ?>/lib/images/top/sample.png" alt="タイトル">
        </div>
        <p class="eng">2020.01.01</p>
        <h3>日本人の胃がんリスクとなる遺伝的背景と生活習慣～人種横断的大規模胃がんゲノム解析の成果～</h3>
      </a>
    </li>
    <?php endforeach; ?>
    <?php endif; wp_reset_postdata(); ?>
  </ul>
  <div class="btn-border">
    <a class="eng upper"href="<?php echo $home; ?>/research">view more</a>
  </div>
</div>
</section>
<?php get_footer();
