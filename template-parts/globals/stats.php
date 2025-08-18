<?php
$stats = get_field('stats');
$items = $stats['items'];
?>

<section class="stats">
  <ul class="stats__list">
    <?php foreach ($items as $item): ?>
      <?php

      $key = $item['key'];
      $label = $item['label'];
      ?>
      <li class="stats__item">
        <div class="stats__number"><?php echo $key; ?></div>
        <div class="stats__text"><?php echo $label; ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
