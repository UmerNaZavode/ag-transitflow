<?php
$footer = get_field('footer', 'options');
?>

<footer class="footer">
  <div class="footer__wrapper">
    <?php get_template_part('template-parts/footer/footer-left'); ?>
    <div class="footer-right">
      <?php get_template_part('template-parts/footer/footer-center-left'); ?>
      <?php get_template_part('template-parts/footer/footer-center-right'); ?>
      <?php get_template_part('template-parts/footer/footer-right'); ?>
    </div>
  </div>
  <div class="footer-copy">
    <div class="footer-copy__container">
      <div class="footer-copy__info">Copyright © TransitFlow | Designed by VictorFlow - Powered by Webflow.</div>
      <?php wp_nav_menu([
        'theme_location'  => 'menu-4',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'footer-copy__list',
        'menu_id'         => 'js-main-menu',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'         => '',
      ]); ?>

      <!-- <ul class="footer-copy__list"> -->
      <!-- <li class="footer-copy__item">Style Guide</li> -->
      <!-- <li class="footer-copy__item">Licenses</li> -->
      <!-- <li class="footer-copy__item">Changelog</li> -->
      <!-- <li class="footer-copy__item">Password</li> -->
      <!-- </ul> -->

    </div>
  </div>
</footer>
