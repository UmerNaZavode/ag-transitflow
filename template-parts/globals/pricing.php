<?php
$pricing = get_field('pricing');
$tag = $pricing['tag'];
$title = $pricing['title'];
$items = $pricing['items'];
?>

<section class="pricing">
  <div class="pricing__tag tag"><?php echo $tag; ?></div>
  <h2 class="pricing__title title"><?php echo $title; ?></h2>
  <div class="pricing__inner">

    <?php foreach ($items as $item): ?>
      <?php
      $background = $item['background'];
      $subtitle = $item['subtitle'];
      $price = $item['price'];
      $advantages = $item['advantages'];
      $button_color = $item['button_color'];
      $button_text = $item['button_text'];
      $button_url = $item['button_url'];
      ?>
      <div class="pricing__card <?php echo $background; ?>">
        <div class="pricing__subtitle subtitle"><?php echo $subtitle; ?></div>
        <div class="pricing__price"><?php echo $price; ?></div>
        <ul class="pricing__list">
          <?php foreach ($advantages as $item): ?>
            <?php
            $key = $item['key'];
            ?>
            <li class="pricing__item"><?php echo $key; ?></li>
          <?php endforeach; ?>
        </ul>
        <button class="pricing__button button <?php echo $button_color; ?>">
          <a class="pricing__link" href="<?php echo $button_url; ?>" target="_blank"><?php echo $button_text; ?></a>
        </button>
      </div>
    <?php endforeach; ?>
  </div>
</section>
