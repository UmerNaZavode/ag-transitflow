<?php
$team = get_field('team');
$tag = $team['tag'];
$title = $team['title'];
$card = $team['card'];
?>

<section class="team container">
  <div class="team__tag tag"><?php echo $tag; ?></div>
  <h2 class="team__title title"><?php echo $title; ?></h2>
  <div class="team__members">
    <?php foreach ($card as $item): ?>
      <?php
      $image = $item['image'];
      $name = $item['name'];
      $role = $item['role'];
      $socials = $item['socials'];
      ?>
      <div class="team__card">
        <img src="<?php echo $image['url']; ?>" class="team__img" alt="<?php echo $image['alt']; ?>" />
        <div class="team__info">
          <div class="team__name"><?php echo $name; ?></div>
          <div class="team__ocupation"><?php echo $role; ?></div>
        </div>
        <ul class="team__list">
          <?php foreach ($socials as $item): ?>
            <?php
            $icon = $item['icon'];
            $url = $item['url'];
            ?>
            <li class="team__item">
              <a class="team__url" href="<?php echo $url; ?>" target="_blank"><?php echo $icon; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>
