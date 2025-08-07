<?php

/**
 * Template Name: Front page
 */
get_header();
?>

<main>
  <?php get_template_part('template-parts/home/home-intro'); ?>
  <?php get_template_part('template-parts/home/what-we-do'); ?>
  <?php get_template_part('template-parts/home/why-us'); ?>
  <?php get_template_part('template-parts/home/transporting'); ?>
  <?php get_template_part('template-parts/general/reviews'); ?>
</main>

<?php get_footer(); ?>
