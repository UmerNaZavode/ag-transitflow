<?php
$footer = get_field('footer', 'options');
$logo = $footer['logo'];
$phone_number = $footer['phone_number'];
$whatsapp = $footer['whatsapp'];
$email = $footer['email'];
$full_address = $footer['full_address'];
$google_url = $footer['google_url'];
$hours = $footer['hours'];
$socials = $footer['socials'];
//$icon = $item['icon'];
//$url = $item['url'];
$form_title = $footer['form_title'];
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
      <ul class="footer-copy__list">
        <li class="footer-copy__item">Style Guide</li>
        <li class="footer-copy__item">Licenses</li>
        <li class="footer-copy__item">Changelog</li>
        <li class="footer-copy__item">Password</li>
      </ul>
    </div>
  </div>
</footer>
