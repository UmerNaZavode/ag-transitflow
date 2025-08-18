<?php
$blog = get_field('blog');
$tag = $blog['tag'];
$title = $blog['title'];
$items = $blog['items'];
$button_text = $blog['button_text'];
$button_url = $blog['button_url'];
$per_page = 3;
if (isset($args["per_page"])) {
  $per_page = $args["per_page"];
}
?>

<section class="blog">
  <div class="blog__tag tag"><?php echo $tag; ?></div>
  <h2 class="blog__title title"><?php echo $title; ?></h2>
  <div class="blog__body">
    <?php foreach ($items as $key => $item): ?>
      <?php
      $image = $item['image'];
      $date = $item['date'];
      $item_url = $item['item_url'];
      $item_title = $item['item_title'];
      $description = $item['description'];
      $advantages = $item['advantages'];
      if ($key <= $per_page - 1)
      ?>

      <?php if ($key <= $per_page - 1): ?>

        <div class="blog__news">
          <img src="<?php echo $image['url']; ?>" width="453" height="308" class="blog__img" alt="<?php echo $image['alt']; ?>" />
          <div class="blog__calendar">
            <?php get_template_part('template-parts/icons/icon-calendar'); ?>
            <div class="blog__date"><?php echo $date; ?></div>
          </div>
          <div class="blog__info">
            <a class="blog__link" href="<?php echo $item_url; ?>">
              <h3 class="blog__subtitle subtitle"><?php echo $item_title; ?></h3>
            </a>
            <p class="blog__desk"><?php echo $description; ?></p>
            <ul class="blog__list">
              <?php foreach ($advantages as $item): ?>
                <?php
                $label = $item['label'];
                ?>
                <li class="blog__item"><?php echo $label; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      <?php endif; ?>

    <?php endforeach; ?>
  </div>
  <a class="blog__button button button--blue" href="<?php echo $button_url; ?>" target="_blank"><?php echo $button_text; ?></a>
</section>
