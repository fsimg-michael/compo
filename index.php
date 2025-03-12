<?php
$title = 'タイトル';
$meta_description = 'デスクリプション';
get_header();
?>

<?php get_template_part('parts/navigation'); ?>

<main class="main page-home">
 <h1>ホームページ</h1>
 <picture>
  <source srcset="<?php echo get_image('cat.webp'); ?>" type="image/webp">
  <img src="<?php echo get_image('cat.jpg'); ?>" alt="Compo" width="400" height="600">
 </picture>
 <p class="js-split-text">SPLIT TEXT</p>
</main>

<?php get_footer(); ?>