<?php
$team_about = get_field('team_about');
$image = $team_about['image'];
$image_absolute = $team_about['image_absolute'];
$tag = $team_about['tag'];
$title = $team_about['title'];
$description = $team_about['description'];
$items = $team_about['items'];
?>

<section class="team-about">
  <div class="team-about__left">
    <div class="team-about__wrapper">
      <img src="<?php echo $image['url']; ?>" class="team-about__img" alt="<?php echo $image['alt']; ?>" />
      <img src="<?php echo $image_absolute['url']; ?>" class="team-about__img-abs" alt="<?php echo $image_absolute['alt']; ?>" />
    </div>
  </div>

  <div class="team-about__right">
    <div class="team-about__header">
      <div class="team-about__tag tag"><?php echo $tag; ?></div>
      <h2 class="team-about__title title"><?php echo $title; ?></h2>
      <p class="team-about__desk"><?php echo $description; ?></p>
    </div>
    <div class="team-about__body">
      <ul class="team-about__list">
        <?php foreach ($items as $item): ?>
          <?php
          $icon = $item['icon'];
          $subtitle = $item['subtitle'];
          $info = $item['info'];
          ?>
          <li class="team-about__item">
            <?php echo $icon; ?>
            <h4 class="team-about__subtitle"><?php echo $subtitle; ?></h4>
            <p class="team-about__info"><?php echo $info; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</section>
