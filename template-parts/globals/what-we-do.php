<?php
$what_we_do = get_field('what_we_do');
$background = $what_we_do['background'];
$tag = $what_we_do['tag'];
$title = $what_we_do['title'];
$items = $what_we_do['items'];
$button_text = $what_we_do['button_text'];
$button_url = $what_we_do['button_url'];
?>

<section class="what-we-do <?php echo $background; ?>">
  <div class="what-we-do__inner container">
    <div class="what-we-do__tag tag"><?php echo $tag; ?></div>
    <h2 class="what-we-do__title title"><?php echo $title; ?></h2>
    <ul class="what-we-do__list">
      <?php foreach ($items as $item): ?>
        <?php
        $icon = $item['icon'];
        $subtitle_text = $item['subtitle_text'];
        $subtitle_url = $item['subtitle_url'];
        $description = $item['description'];
        ?>
        <li class="what-we-do__item">
          <div class="what-we-do__icon"><?php echo $icon; ?></div>
          <a href="<?php echo $subtitle_url; ?>" class="what-we-do__link">
            <h3 class="what-we-do__subtitle subtitle"><?php echo $subtitle_text; ?></h3>
          </a>
          <p class="what-we-do__desk"><?php echo $description; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
    <button class="what-we-do__button button button--blue">
      <a class="what-we-do__link" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
    </button>
  </div>
</section>
