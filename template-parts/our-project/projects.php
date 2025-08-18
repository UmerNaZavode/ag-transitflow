<?php
$items = get_field('items');
$projects = $items['projects'];
?>

<section class="projects">
  <div class="projects__wrapper container">
    <?php foreach ($projects as $item): ?>
      <?php
      $image = $item['image'];
      $url = $item['url'];
      ?>
      <div class="projects__body">
        <img src="<?php echo $image['url']; ?>" class="projects__img" width="530" height="353" alt="<?php echo $image['alt']; ?>" />
        <a class="projects__link" href="<?php echo $url; ?>">
          <?php get_template_part('template-parts/icons/icon-link'); ?>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
