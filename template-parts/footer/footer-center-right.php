<div class="footer-right__wrapper">
  <h3 class="footer-right__title title">Utility</h3>
  <div class="footer-right__content">

    <?php wp_nav_menu([
      'theme_location'  => 'menu-3',
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'footer-right__list',
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

  </div>
</div>
