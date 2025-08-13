<?php
$footer = get_field('footer', 'option');
$phone_number = $footer['phone_number'];
$email = $footer['email'];
$hours = $footer['hours'];
$contact = get_field('contact');
$tag = $contact['tag'];
$title = $contact['title'];
$description = $contact['description'];
$items = $contact['items'];
?>

<section class="contact">
  <div class="contact__inner container">
    <div class="contact__tag tag tag--alt"><?php echo $tag; ?></div>
    <div class="contact__body">
      <div class="contact__info">
        <h2 class="contact__title title"><?php echo $title; ?></h2>
        <p class="contact__desk"><?php echo $description; ?></p>
        <ul class="contact__list">
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
          <li class="contact__item">
            <div class="header-contacts__icon icon">
              <?php get_template_part('template-parts/icons/icon-clock-yellow'); ?>
            </div>
            <div class="contact__info">
              <?php echo $hours; ?>
            </div>
          </li>
        </ul>
      </div>
      <div class="contact__wrapper">
        <?php get_template_part('template-parts/form'); ?>
      </div>
    </div>
  </div>
  <div class="contact-footer container">
    <?php foreach ($items as $item): ?>
      <?php
      $image = $item['image'];
      $logo = $item['logo'];
      ?>
      <div class="contact-footer__content">
        <img src="<?php echo $image['url']; ?>" class="contact-footer__content" alt="<?php echo $image['alt']; ?>" />
        <!-- <img src="./../src/img/home-page/contact1.jpg" width="300" height="234" alt="" class="contact-footer__content" loading="lazy"> -->
        <div class="contact-footer__logo"><?php echo $logo; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
