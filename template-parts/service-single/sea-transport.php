<?php
$sea_transport = get_field('sea_transport');
$image = $sea_transport['image'];
$icon = $sea_transport['icon'];
$title = $sea_transport['title'];
$descrioption = $sea_transport['descrioption'];
?>

<section class="sea-transport container">
  <img src="<?php echo $image['url']; ?>" class="sea-transport__img" alt="<?php echo $image['alt']; ?>" />
  <!-- <img src="./../src/img/service-details/sea-transport-service.jpg" width="1199" height="509" alt="" -->
  <!-- class="sea-transport__img"> -->
  <header class="sea-transport__header">
    <div class="sea-transport__icon"><?php echo $icon; ?></div>
    <h2 class="sea-transport__title title"><?php echo $title; ?></h2>
  </header>
  <div class="sea-transport__text"><?php echo $descrioption; ?></div>
</section>
