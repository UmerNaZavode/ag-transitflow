<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ar-starter
 */

get_header();
?>

<?php
$single_artical = get_field('single_artical');
$image = $single_artical['image'];
$description = $single_artical['description'];
?>



<?php
get_footer();
