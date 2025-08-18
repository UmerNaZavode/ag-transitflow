<?php
$related_projects = get_field('related_projects');
$title = $related_projects['title'];
$items = $related_projects['items'];
//$image = $item['image'];
//$url = $item['url'];
?>

<section class="related-projects container">
  <h2 class="related-projects__title title"><?php echo $title; ?></h2>
  <div class="related-projects__wrapper">
    <?php foreach ($items as $item): ?>
      <?php
      $image = $item['image'];
      $url = $item['url'];
      ?>
      <div class="related-projects__body">
        <img src="<?php echo $image['url']; ?>" class="related-projects__img" alt="<?php echo $image['alt']; ?>" />
        <a class="related-projects__link" href="<?php echo $url; ?>">
          <?php get_template_part('template-parts/icons/icon-link'); ?>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
