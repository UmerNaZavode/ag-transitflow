<?php
$why_us = get_field('why_us');
$bg_image = $why_us['bg_image'];
$tag = $why_us['tag'];
$title = $why_us['title'];
$description = $why_us['description'];
$items = $why_us['items'];
$image = $why_us['image'];
$image_absolute = $why_us['image_absolute'];
$numbers = $why_us['numbers'];
?>

<section class="why-us">
  <div class="why-us__wrapper">
    <img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>" width="1920" height="504" loading="lazy" class="why-us__img" />
  </div>
  <div class="why-us__container container">
    <div class="why-us__inner">
      <div class="why-us__body">
        <div class="why-us__left">
          <div class="why-us__tag tag"><?php echo $tag; ?></div>
          <h2 class="why-us__title title"><?php echo $title; ?></h2>
          <div class="why-us__paragraph"><?php echo $description; ?></div>
          <ul class="why-us__list">
            <?php foreach ($items as $item) : ?>
              <?php
              $icon = $item['icon'];
              $subtitle = $item['subtitle'];
              ?>
              <li class="why-us__item">
                <?php echo $icon; ?>
                <h4 class="why-us__subtitle subtitle"><?php echo $subtitle; ?></h4>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="why-us__right">
          <img src="<?php echo $image['url']; ?>" class="why-us__1" alt="<?php echo $image['alt']; ?>" />
          <img src="<?php echo $image_absolute['url']; ?>" class="why-us__2" alt="<?php echo $image_absolute['alt']; ?>" />
        </div>
      </div>
      <ul class="why-us__stat-list">
        <?php foreach ($numbers as $item): ?>
          <?php
          $value = $item['value'];
          $key = $item['key'];
          ?>
          <li class="why-us__stat-item">
            <div class="why-us__stat-number"><?php echo $value; ?></div>
            <div class="why-us__stat-text"><?php echo $key; ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
