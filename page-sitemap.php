<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="single" class="sec">
<div class="wrap">
<div class="post-inner mt-1">
<?php the_content(); ?>
</div>

<h4 class="mt-3"><a href="<?php echo $home; ?>/news">ニュース</a></h4>
<ul>
  <?php $args = array(
    'numberposts' => -1, //表示する記事の数
    'post_type' => 'news' //投稿タイプ名
    // 条件を追加する場合はここに追記
  );
  $customPosts = get_posts($args);
  if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
  ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endforeach; ?>
  <?php else : //記事が無い場合 ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif;
  wp_reset_postdata(); //クエリのリセット ?>
</ul>

<h4><a href="<?php echo $home; ?>/research">研究コラム・成果</a></h4>
<ul>
  <?php $args = array(
    'numberposts' => -1, //表示する記事の数
    'post_type' => 'research' //投稿タイプ名
    // 条件を追加する場合はここに追記
  );
  $customPosts = get_posts($args);
  if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
  ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endforeach; ?>
  <?php else : //記事が無い場合 ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif;
  wp_reset_postdata(); //クエリのリセット ?>
</ul>

</div>
</section>
<?php get_footer();
