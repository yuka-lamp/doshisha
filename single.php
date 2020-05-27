<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (have_posts()): while (have_posts()): the_post();
$arr = get_the_tags();
$t = get_the_title();
$i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
$categories = get_the_terms($post_id, 'custom_category');
?>

<section id="single" class="sec">
<div class="wrap">
<time datetime="<?php the_time('Y-m-d'); ?>">&nbsp;<?php the_time('Y.m.d'); ?></time>
<div class="post-inner mt-1">
<?php the_content(); ?>
</div>
</div>
</section>
<?php
endwhile;
endif;
get_footer();
?>

<?php get_footer();
