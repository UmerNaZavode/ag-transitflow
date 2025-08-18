<?php
$our_goodness = get_field('our_goodness');
$tag = $our_goodness['tag'];
$title = $our_goodness['title'];
$image = $our_goodness['image'];
$image_absolute = $our_goodness['image_absolute'];
$items = $our_goodness['items'];
?>

<section class="our-godness">
  <header class="our-godness__header">
    <div class="our-godness__tag tag"><?php echo $tag; ?></div>
    <h2 class="our-godness__title title"><?php echo $title; ?></h2>
  </header>
  <div class="our-godness__inner">
    <div class="our-godness__left">
      <div class="our-godness__wrapper">
        <img src="<?php echo $image['url']; ?>" class="our-godness__img" alt="<?php echo $image['alt']; ?>" />
        <img src="<?php echo $image_absolute['url']; ?>" class="our-godness__img-abs" alt="<?php echo $image_absolute['alt']; ?>" />
        <!-- <img src="./../src/img/services-page/our-godness1.jpg" alt="" width="726" height="486" class="our-godness__img"> -->
        <!-- <img src="./../src/img/services-page/our-godness2.jpg" alt="" width="319" height="303" -->
        <!-- class="our-godness__img-abs"> -->
      </div>
    </div>
    <div class="our-godness__right">
      <?php foreach ($items as $item): ?>
        <?php
        $icon = $item['icon'];
        $subtitle = $item['subtitle'];
        $description = $item['description'];
        ?>
        <div class="our-godness__info">
          <div class="our-godness__icon"><?php echo $icon; ?></div>
          <div class="our-godness__body">
            <h3 class="our-godness__subtitle subtitle"><?php echo $subtitle; ?></h3>
            <p class="our-godness__desk"><?php echo $description; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
