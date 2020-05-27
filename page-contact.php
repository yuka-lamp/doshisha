<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="contact" class="sec">
<div class="wrap">
<div class="post-inner mt-1">
<?php the_content(); ?>
</div>
</div>
</section>
<?php get_footer();
