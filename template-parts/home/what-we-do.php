<?php
$what_we_do = get_field('what_we_do');
$tag = $what_we_do['tag'];
$title = $what_we_do['title'];
$items = $what_we_do['items'];
?>
<section class="we-do container">
  <div class="we-do__left">
    <div class="we-do__tag tag"><?php echo $tag; ?></div>
    <h2 class="we-do__title title"><?php echo $title; ?></h2>
  </div>
  <div class="we-do__right">
    <ul class="we-do__list">
      <?php foreach ($items as $item) : ?>
        <?php
        $icon = $item['icon'];
        $subtitle = $item['subtitle'];
        $description = $item['description'];
        ?>
        <li class="we-do__item">
          <div class="we-do__icon">
          <?php echo $icon; ?>
          </div>
          <div class="we-do__info">
            <h3 class="we-do__subtitle subtitle"><?php echo $subtitle; ?></h3>
            <p class="we-do__desk"><?php echo $description; ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
