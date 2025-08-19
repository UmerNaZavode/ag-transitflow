<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ar-starter
 */
get_header(); ?>
<?php
$single_artical = get_field('single_artical');
$title = get_the_title();
?>
<section class="single">
  <div class="single-intro">
    <?php
    if (has_post_thumbnail()) {
      the_post_thumbnail('large', ['class' => 'single-intro__thumbnail']);
    }
    ?>
    <div class="single-intro__body container">
      <div class="single-intro__wrapper">
        <?php get_template_part('template-parts/icons/icon-calendar-alt'); ?>
        <div class="single-intro__date">
          <span class="single-intro__day"><?php echo get_the_date('d'); ?></span>
          <span class="single-intro__month"><?php echo get_the_date('F'); ?></span>
        </div>
      </div>
      <h1 class="single-intro__title title"><?php echo $title; ?></h1>
    </div>
  </div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="single-body container">
        <div class="single-body__left"><?php the_content(); ?></div>
        <div class="single-body__right"></div>
      </div>
  <?php endwhile;
  endif; ?>
</section>

<?php get_footer(); ?>
