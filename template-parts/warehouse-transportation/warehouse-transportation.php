<?php
$wharehouse_transportation = get_field('wharehouse_transportation');
$title = $wharehouse_transportation['title'];
$description = $wharehouse_transportation['description'];
$items = $wharehouse_transportation['items'];
?>

<section class="warehouse-transportation container">
  <h2 class="warehouse-transportation__title title"><?php echo $title; ?></h2>
  <div class="warehouse-transportation__description"><?php echo $description; ?></div>
  <ul class="warehouse-transportation__list">
    <?php foreach ($items as $item): ?>
      <?php
      $subtitle = $item['subtitle'];
      ?>
      <li class="warehouse-transportation__item">
        <div class="warehouse-transportation__arrow">
          <?php get_template_part("template-parts/icons/icon-right-arrow"); ?>
        </div>
        <div class="warehouse-transportation__option"><?php echo $subtitle; ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
