<?php
$home_intro = get_field('home_intro');
$image = $home_intro['image'];
$tag = $home_intro['tag'];
$title = $home_intro['title'];
$description = $home_intro['description'];
$button_text = $home_intro['button_text'];
$button_link = $home_intro['button_link'];
?>
<section class="home-intro">
  <img src="<?php echo $image['url'];?>"  alt="<?php echo $image['alt']; ?>" class="home-intro__img" />
  <div class="home-intro__wrapper container">
    <div class="home-intro__body">
      <div class="home-intro__tag tag tag--alt"><?php echo $tag; ?></div>
      <h1 class="home-intro__title"><?php echo $title; ?></h1>
      <p class="home-intro__info"><?php echo $description; ?></p>
      <button class="home-intro__button button button--yellow">
        <a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
      </button>
    </div>
  </div>
</section>
