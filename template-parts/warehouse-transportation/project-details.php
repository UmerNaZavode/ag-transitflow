<?php
$project_details = get_field('project_details');
$image = $project_details['image'];
$title = $project_details['title'];
$items = $project_details['items'];
?>

<section class="project-details">
  <div class="project-details__wrapper container">
    <div class="project-details__left">
      <img src="<?php echo $image['url']; ?>" class="project-details__img" alt="<?php echo $image['alt']; ?>" />
    </div>
    <div class="project-details__right">
      <h3 class="project-details__title"><?php echo $title; ?></h3>
      <div class="project-details__inner">
        <?php foreach ($items as $item): ?>
          <?php
          $label = $item['label'];
          $key = $item['key'];
          ?>
          <div class="project-details__list">
            <div class="project-details__label"><?php echo $label; ?></div>
            <div class="project-details__key"><?php echo $key; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
