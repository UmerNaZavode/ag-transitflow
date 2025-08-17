<?php
$page_intro = get_field('page_intro');
$image = $page_intro['image'];
$tag = $page_intro['tag'];
$title = $page_intro['title'];
?>

<section class="page-intro">
  <img src="<?php echo $image['url']; ?>" class="page-intro__img" alt="<?php echo $image['alt']; ?>" />
  <!-- <img src="{{introImg}}" alt="" class="page-intro__img"> -->
  <div class="page-intro__body container">
    <div class="page-intro__tag tag tag--alt"><?php echo $tag; ?></div>
    <h1 class="page-intro__title title"><?php echo $title; ?></h1>
  </div>
</section>
