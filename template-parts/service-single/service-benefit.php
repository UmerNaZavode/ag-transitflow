<?php
$service_benefit = get_field('service_benefit');
$title = $service_benefit['title'];
$description = $service_benefit['description'];
$image = $service_benefit['image'];
$items = $service_benefit['items'];
?>

<section class="service-benefit container">
  <div class="service-benefit__left">
    <h2 class="service-benefit__title title"><?php echo $title; ?></h2>
    <p class="service-benefit__desk"><?php echo $description; ?></p>
    <ul class="service-benefit__list">
      <?php foreach ($items as $item): ?>
        <?php
        $benefit = $item['benefit'];
        ?>
        <li class="service-benefit__item">
          <div class="service-benefit__arrow">
            <?php get_template_part("template-parts/icons/icon-right-arrow"); ?>
          </div>
          <div class="service-benefit__option"><?php echo $benefit; ?></div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="service-benefit__right">
    <img src="<?php echo $image['url']; ?>" class="service-benefit__img" alt="<?php echo $image['alt']; ?>" />
  </div>
</section>
