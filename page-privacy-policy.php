<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php if (have_posts()): while (have_posts()):the_post(); ?>
<article id="single" class="post-content sec">
<div class="wrap">
<div class="contents">
<?php the_content(); ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>

<?php get_footer();
