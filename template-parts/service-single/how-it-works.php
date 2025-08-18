<?php
$how_it_works = get_field('how_it_works');
$video = $how_it_works['video'];
$poster = $how_it_works['poster'];
$title = $how_it_works['title'];
$description = $how_it_works['description'];
?>

<section class="how-it-works container">
  <div class="how-it-works__left">
    <div class="video-player" data-js-video-player>
      <video src="<?php echo $video['url']; ?>" class="videp-player__video" poster="<?php echo $poster['url']; ?>" width="645" height="367" data-js-video-player-video></video>
      <div class="video-player__panel is-active" data-js-video-player-panel>
        <button class="video-player__play-button" type="button" title="Play video" data-js-video-player-play-button>
          <?php get_template_part('template-parts/icons/icon-play-button'); ?>
        </button>
      </div>
    </div>
  </div>
  <div class="how-it-works__right">
    <h2 class="how-it-works__title title"><?php echo $title; ?></h2>
    <div class="how-it-works__text"><?php echo $description; ?></div>
  </div>
</section>
