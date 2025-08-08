<?php
$choose_us = get_field('choose_us');
$image = $choose_us['image'];
$body_decription = $choose_us['body_decription'];
$tag = $choose_us['tag'];
$title = $choose_us['title'];
$description = $choose_us['description'];
$items = $choose_us['items'];
?>

<section class="choose-us">
  <div class="choose-us__inner">
    <div class="choose-us__left">
      <div class="choose-us__wrapper">
        <img src="<?php echo $image['url']; ?>" class="choose-us__img" alt="<?php echo $image['alt']; ?>" />
        <div class="choose-us__body">
          <?php get_template_part('template-parts/icons/icon-choose-us'); ?>
          <div class="choose-us__desk"><?php echo $body_decription; ?></div>
        </div>
      </div>
    </div>
    <div class="choose-us__right">
      <div class="choose-us__tag tag"><?php echo $tag; ?></div>
      <h2 class="choose-us__title title"><?php echo $title; ?></h2>
      <p class="choose-us__info"><?php echo $description; ?></p>
      <ul class="choose-us__list">
        <?php foreach ($items as $item): ?>
          <?php
          $icon = $item['icon'];
          $subtitle = $item['subtitle'];
          ?>
          <li class="choose-us__item">
            <div class="choose-us__icon">
              <?php echo $icon; ?>
            </div>
            <h4 class="choose-us__subtitle subtitle"><?php echo $subtitle; ?></h4>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
