<?php
$about_us = get_field('about_us');
$image = $about_us['image'];
$image_absolute = $about_us['image_absolute'];
$tag = $about_us['tag'];
$title = $about_us['title'];
$description = $about_us['description'];
$tabs = $about_us['tabs'];
$button = $about_us['button'];
$button_url = $about_us['button_url'];
?>

<section class="about-us">
  <div class="about-us__left">
    <div class="about-us__wrapper">
      <img src="<?php echo $image['url']; ?>" class="about-us__img" width="726" height="486" alt="<?php echo $image['alt']; ?>" />
      <img src="<?php echo $image_absolute['url']; ?>" class="about-us__img-abs" width="239" height="233" alt="<?php echo $image_absolute['alt']; ?>" />
    </div>
  </div>
  <div class="about-us__right">
    <div class="about-us__inner">
      <div class="about-us__tag tag"><?php echo $tag; ?></div>
      <h2 class="about-us__title title"><?php echo $title; ?></h2>
      <p class="about-us__desk"><?php echo $description; ?></p>
      <?php if ($tabs): ?>
        <div class="about-us__tabs" role="tablist">
          <?php foreach ($tabs as $index => $tab): ?>
            <button
              class="about-us__tabs-button <?php echo $index === 0 ? 'active' : ''; ?>"
              type="button"
              data-tab="<?php echo $index; ?>">
              <?php echo $tab['button_text']; ?>
            </button>
          <?php endforeach; ?>
        </div>
        <?php foreach ($tabs as $index => $tab): ?>
          <div
            class="about-us__tabs-content <?php echo $index === 0 ? 'about-us__tabs-content--active' : ''; ?>"
            data-tab-content="<?php echo $index; ?>">
            <p class="about-us__tabs-desk"><?php echo $tab['tab_description']; ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <a class="about-us__button button button--blue" href="<?php echo $button_url; ?>" target="_blank">
        <?php echo $button; ?>
      </a>
    </div>
  </div>
</section>
