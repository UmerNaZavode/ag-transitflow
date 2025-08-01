<?php
$transporting = get_field('transporting');
$title = $transporting['title'];
$items = $transporting['items'];
$button_text = $transporting['button_text'];
$button_link = $transporting['button_link'];
?>
<section class="transporting">
  <h2 class="transporting__title title"><?php echo $title; ?></h2>
  <ul class="transporting__list">
    <?php foreach ($items as $item) : ?>
      <?php
      $image = $item['image'];
      $card_title = $item['card_title'];
      $card_subtitle = $item['card_subtitle'];
      ?>
    <li class="transporting__item">
      <img src="<?php echo $image['url'];?>"  alt="<?php echo $image['alt']; ?>" class="transporting__img" loading="lazy"/>
      <div class="transporting__info">
        <h4 class="transporting__subtitle"><?php echo $card_title; ?></h4>
        <div class="transporting__desk"><?php echo $card_subtitle; ?></div>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  <button class="transporting__button button button--blue" type="button">
    <a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a></button>
</section>
