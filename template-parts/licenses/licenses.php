<?php
$licenses = get_field('licenses');
$items = $licenses['items'];
?>
<section class="licenses container">
  <?php foreach ($items as $item): ?>
    <?php
    $title = $item['title'];
    $info = $item['info'];
    ?>
    <div class="licenses__wrapper">
      <h3 class="licenses__title"><?php echo $title; ?></h3>
      <div class="licenses__content">
        <div class="licenses__info"><?php echo $info; ?></div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
