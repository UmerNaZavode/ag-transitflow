<?php
$companies = get_field('companies');
$items = $companies['items'];
?>

<section class="companies">
  <div class="companies__wrapper container">
    <?php foreach ($items as $item): ?>
      <?php
      $image = $item['image'];
      $logo = $item['logo'];
      ?>
      <div class="companies__content">
        <img src="<?php echo $image['url']; ?>" class="companies__img" width="300" height="234" alt="<?php echo $image['alt']; ?>" />
        <div class="companies__logo"><?php echo $logo; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
