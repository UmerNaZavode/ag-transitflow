<?php
$footer = get_field('footer', 'option');
$phone_number = $footer['phone_number'];
$email = $footer['email'];
$hours = $footer['hours'];
$contact = get_field('contact');
$tag = $contact['tag'];
$title = $contact['title'];
$description = $contact['description'];
?>

<section class="contact-us">
  <div class="contact-us__inner">
    <div class="contact-us__header">
      <div class="contact-us__tag tag tag--alt"><?php echo $tag; ?></div>
      <h2 class="contact-us__title title"><?php echo $title; ?></h2>
      <p class="contact-us__desk"><?php echo $description; ?></p>
    </div>
    <div class="contact-us__body">
      <div class="contact-us__info">
        <ul class="contact-us__list">
          <li class="contact-us__item">
            <div class="contact-us__icon icon">
              <?php get_template_part('template-parts/icons/icon-mail'); ?>
            </div>
            <div class="contact-us__contact">
              <a href="mailto:<?php echo $email; ?>" class="contact-us__link" target="_blank">
                <?php echo $email; ?>
              </a>
            </div>
          </li>
          <li class="contact-us__item">
            <div class="contact-us__icon icon">
              <?php get_template_part('template-parts/icons/icon-phone'); ?>
            </div>
            <div class="contact-us__contact">
              <a href="tel:<?php echo clear_phone($phone_number); ?>" class="contact-us__link" target="_blank">
                <?php echo $phone_number; ?>
              </a>
            </div>
          </li>
          <li class="contact-us__item">
            <div class="contact-us__icon icon">
              <?php get_template_part('template-parts/icons/icon-clock-yellow'); ?>
            </div>
            <div class="contact-us__contact">
              <?php echo $hours; ?>
            </div>
          </li>
        </ul>
      </div>
      <div class="contact-us__wrapper">
        <?php get_template_part('template-parts/form-alt'); ?>
      </div>
    </div>
  </div>
</section>
