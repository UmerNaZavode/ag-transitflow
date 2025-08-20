<?php
$faq = get_field('faq');
$tag = $faq['tag'];
$title = $faq['title'];
$accordion = $faq['accordion'];
$image = $faq['image'];
$card_tag = $faq['card_tag'];
$card_title = $faq['card_title'];
$button_text = $faq['button_text'];
$button_url = get_the_permalink(12143);
$footer = get_field('footer', 'option');
$phone_number = $footer['phone_number'];
?>

<section class="faq">
  <div class="faq__left">
    <div class="faq__tag tag"><?php echo $tag; ?></div>
    <div class="faq__title title"><?php echo $title; ?></div>
    <div class="accordion">
      <?php foreach ($accordion as $item): ?>
        <?php
        $accordion_title = $item['accordion_title'];
        $accordion_description = $item['accordion_description'];
        ?>
        <div class="accordion tile">
          <details class="accordion__details" name="faq">
            <summary class="accordion__summary">
              <h4 class="accordion__title h6">
                <span role="term" aria-details="faq-3"><?php echo $accordion_title; ?></span>
              </h4>
            </summary>
          </details>
          <div class="accordion__content" id="faq-3" role="definition">
            <div class="accordion__content-inner">
              <div class="accordion__content-body"><?php echo $accordion_description; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="faq__right">
    <img src="<?php echo $image['url']; ?>" class="faq__img" alt="<?php echo $image['alt']; ?>" />
    <div class="faq__wrapper">
      <div class="faq__tag tag tag--alt"><?php echo $card_tag; ?></div>
      <h3 class="faq__subtitle subtitle"><?php echo $card_title; ?></h3>
      <div class="faq__contact">
        <div class="faq__icon icon">
          <?php get_template_part('template-parts/icons/icon-phone'); ?>
        </div>
        <div class="faq__info">
          <a href="tel:<?php echo clear_phone($phone_number); ?>" class="faq__link" target="_blank">
            Call Us<br>
            <?php echo $phone_number; ?>
          </a>
        </div>
      </div>
      <button class="faq__button button button--yellow">
        <a class="faq__link" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
      </button>
    </div>
  </div>
</section>
