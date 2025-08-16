<?php
$footer = get_field('footer', 'options');
$logo = $footer['logo'];
$phone_number = $footer['phone_number'];
$email = $footer['email'];
$description = $footer['description'];
?>

<div class="footer-left">
  <img src="<?php echo $logo['url']; ?>" class="footer__logo" alt="<?php echo $logo['alt']; ?>" />
  <div class="footer-left__info">
    <p class="footer-left__desk"><?php echo $description; ?></p>
    <ul class="footer-left__list">
      <li class="contact__item">
        <div class="contact__icon icon">
          <?php get_template_part('template-parts/icons/icon-mail'); ?>
        </div>
        <div class="contact__info">
          <a href="mailto:<?php echo $email; ?>" class="header-contacts__link" target="_blank">
            Email<br> <?php echo $email; ?>
          </a>
        </div>
      </li>
      <li class="contact__item">
        <div class="contact__icon icon">
          <?php get_template_part('template-parts/icons/icon-phone'); ?>
        </div>
        <div class="contact__info">
          <a href="tel:<?php echo clear_phone($phone_number); ?>" class="header-contacts__link" target="_blank">
            Call Us<br>
            <?php echo $phone_number; ?>
          </a>
        </div>
      </li>
    </ul>
  </div>
</div>
