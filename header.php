<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/common.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/under-common.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/header.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/footer.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/sec-link.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/top.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/single.css" rel="stylesheet">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header" class="
  <?php if (is_home() || is_front_page()): ?>
  main
  <?php else: ?>
  sub
  <?php endif; ?>">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container flex">
      <a class="flex flex-center logo" href="<?php echo $home; ?>/">
        <?php if (is_home() || is_front_page()): ?>
          <img src="<?php echo $wp_url; ?>/lib/images/common/logo_fff.svg" alt="同志社大学中小企業マネジメント研究センターのロゴ">
          <?php else: ?>
          <img src="<?php echo $wp_url; ?>/lib/images/common/logo_color.svg" alt="同志社大学中小企業マネジメント研究センターのロゴ">
          <?php endif; ?>
        <p class="fff b">中小企業<br>マネジメント研究センター</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $home; ?>/research">研究コラム・成果</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $home; ?>/news">お知らせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- ヘッダー終了 -->

<?php if (is_home() || is_front_page()): ?>

<!-- トップページMV -->
<section id="mv" class="flex flex-center">
  <div class="content txt-c">
    <p class="fff">中小企業の発展に<br class="sp-only">貢献しようとする
      <br>日本全国の若手の<br class="sp-only">中小企業研究者を育成</p>
    <p class="eng fff">Training young<br class="sp-only"> SME researchers<br class="sp-only"> throughout Japan.</p>
  </div>
</section>
<!-- トップページMV終了 -->

<?php else: ?>

<!-- 下層ページMV -->
<section id="sub-mv">
  <!-- パンくず -->
  <?php if (is_home() || is_front_page()): ?>
  <?php else: ?>
  <?php if (!is_front_page() && !is_home()) {
  if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div id="breadcrumbs" class="pc">','</div>');
    }
  } ?>
  <?php endif; ?>
  <!-- パンくず終了 -->
  <div class="flex flex-center">
    <div class="content txt-c">
      <h2 class="serif fff"><?php echo get_the_title(); ?></h2>
      <p class="eng fff"><?php echo $slug; ?></p>
    </div>
  </div>
</section>
<!-- 下層ページMV終了 -->

<?php endif; ?>

<!-- メインコンテンツ -->
<main>
