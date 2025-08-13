<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php
  $header = get_field('header', 'option');
  $logo = $header['logo'];
  $button_text = $header['button_text'];
  $button_url = $header['button_url'];
  $footer = get_field('footer', 'option');
  $phone_number = $footer['phone_number'];
  $email = $footer['email'];
  $hours = $footer['hours'];
  $socials = $footer['socials'];
  ?>
  <header class="header">
    <div class="header-contacts">
      <div class="header-contacts__body container">
        <a href="/" class="header-contacts__logo">
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
        </a>
        <ul class="header-contacts__list">
          <li class="header-contacts__item">
            <div class="header-contacts__icon icon">
              <?php get_template_part('template-parts/icons/icon-clock-yellow'); ?>
            </div>
            <div class="header-contacts__info">
              <?php echo $hours; ?>
            </div>
          </li>
          <li class="header-contacts__item">
            <div class="header-contacts__icon icon">
              <?php get_template_part('template-parts/icons/icon-mail'); ?>
            </div>
            <div class="header-contacts__info">
              <a href="mailto:<?php echo $email; ?>" class="header-contacts__link" target="_blank">
                Email<br> <?php echo $email; ?>
              </a>
            </div>
          </li>
          <li class="header-contacts__item">
            <div class="header-contacts__icon icon">
              <?php get_template_part('template-parts/icons/icon-phone'); ?>
            </div>
            <div class="header-contacts__info">
              <a href="tel:<?php echo clear_phone($phone_number); ?>" class="header-contacts__link" target="_blank">
                Call Us<br>
                <?php echo $phone_number; ?>
              </a>
            </div>
          </li>
        </ul>
        <button class="header-burger" type="button" aria-label="Toggle menu">
          <span class="header-burger__line"></span>
          <span class="header-burger__line"></span>
          <span class="header-burger__line"></span>
        </button>
      </div>
    </div>
    <div class="header-main">
      <div class="header-main__body container">
        <div class="header-nav">

          <?php wp_nav_menu([
            'theme_location'  => 'menu-1',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'main-menu main-header__main-menu',
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
        <div class="header-socials">
          <ul class="header-socials__list">
            <?php foreach ($socials as $item) : ?>
              <?php
              $icon = $item['icon'];
              $url = $item['url'];
              ?>
              <li class="header-socials__item">
                <a href="<?php echo $url; ?>" class="header-socials__link" target="_blank">
                  <?php echo $icon; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
          <button class="header-socials__btn" type="button"><a href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a></button>
        </div>
      </div>
    </div>

    <!-- <div class="header-mobile"> -->
    <!--   <div class="header-mobile__overlay"></div> -->
    <!--   <div class="header-mobile__content"> -->
    <!--     <!-- Кнопка закрытия -->
    <!--     <button class="header-mobile__close" type="button" aria-label="Close menu"> -->
    <!--       <span class="header-mobile__close-line"></span> -->
    <!--       <span class="header-mobile__close-line"></span> -->
    <!--     </button> -->
    <!---->
    <!--     <div class="header-mobile__nav"> -->
    <!--       <ul class="header-mobile__list"> -->
    <!--         <li class="header-mobile__item"> -->
    <!--           <a href="/" class="header-mobile__link">Home</a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__item"> -->
    <!--           <a href="/about.html" class="header-mobile__link">About</a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__item header-mobile__item--dropdown"> -->
    <!--           <button class="header-mobile__button header-mobile__button--dropdown">Pages</button> -->
    <!--           <ul class="header-mobile__dropdown"> -->
    <!--             <li><a href="/services.html">Services</a></li> -->
    <!--             <li><a href="/faq.html">FAQ</a></li> -->
    <!--             <li><a href="/pricing.html">Pricing</a></li> -->
    <!--             <li><a href="/testimonials.html">Testimonials</a></li> -->
    <!--           </ul> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__item"> -->
    <!--           <a href="/project.html" class="header-mobile__link">Project</a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__item"> -->
    <!--           <a href="/contact" class="header-mobile__link">Contact</a> -->
    <!--         </li> -->
    <!--       </ul> -->
    <!--     </div> -->
    <!--     <div class="header-mobile__socials"> -->
    <!--       <ul class="header-mobile__socials-list"> -->
    <!--         <li class="header-mobile__socials-item"> -->
    <!--           <a href="https://instagram.com" class="header-mobile__socials-link" target="_blank"> -->
    <!--             <!-- Instagram SVG icon -->
    <!--           </a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__socials-item"> -->
    <!--           <a href="https://facebook.com" class="header-mobile__socials-link" target="_blank"> -->
    <!--             <!-- Facebook SVG icon -->
    <!--           </a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__socials-item"> -->
    <!--           <a href="https://x.com" class="header-mobile__socials-link" target="_blank"> -->
    <!--             <!-- X (Twitter) SVG icon -->
    <!--           </a> -->
    <!--         </li> -->
    <!--         <li class="header-mobile__socials-item"> -->
    <!--           <a href="https://linkedin.com" class="header-mobile__socials-link" target="_blank"> -->
    <!--             <!-- LinkedIn SVG icon -->
    <!--           </a> -->
    <!--         </li> -->
    <!--       </ul> -->
    <!--       <button class="header-mobile__btn" type="button"><a href="/">Request Quote</a></button> -->
    <!--     </div> -->
    <!--   </div> -->
    <!-- </div> -->
  </header>
  <main>
