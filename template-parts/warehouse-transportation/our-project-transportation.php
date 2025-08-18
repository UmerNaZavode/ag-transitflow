<?php
$our_project_transportation = get_field('our_project_transportation');
$title = $our_project_transportation['title'];
$description = $our_project_transportation['description'];
$video = $our_project_transportation['video'];
$poster = $our_project_transportation['poster'];
?>

<section class="our-project-transportation container">
  <h2 class="our-project-transportation__title title"><?php echo $title; ?></h2>
  <div class="our-project-transportation__description"><?php echo $description; ?></div>
  <div class="video-player" data-js-video-player>
    <video src="<?php echo $video['url']; ?>" class="video-player__video our-project-transportation__video" poster="<?php echo $poster['url']; ?>" data-js-video-player-video></video>
    <div class="video-player__panel is-active" data-js-video-player-panel>
      <button class="video-player__play-button" type="button" title="Play video" data-js-video-player-play-button>
        <?php get_template_part('template-parts/icons/icon-play-button'); ?>
      </button>
    </div>
  </div>
</section>
