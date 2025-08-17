<?php
$reviews = get_field('reviews');
$bg_color = $reviews['bg_color'];
$tag = $reviews['tag'];
$title = $reviews['title'];
$body = $reviews['body'];
?>

<section class="reviews <?php echo $bg_color; ?>">
  <div class="reviews__inner container">
    <div class="reviews__tag tag"><?php echo $tag; ?></div>
    <header class="reviews__header">
      <div class="reviews__left">
        <h2 class="reviews__title title"><?php echo $title; ?></h2>
      </div>
      <div class="reviews__right">
        <button class="reviews__button-prev slider-button slider-button__prev" type="button">
          <?php get_template_part('template-parts/icons/icon-prev'); ?>
        </button>
        <button class="reviews__button-next slider-button slider-button__next" type="button">
          <?php get_template_part('template-parts/icons/icon-next'); ?>
        </button>
      </div>
    </header>
    <div class="swiper reviews-swiper">
      <div class="swiper-wrapper">
        <?php foreach ($body as $item): ?>
          <?php
          $items = $item['items'];
          ?>
          <div class="swiper-slide">
            <div class="reviews-card">
              <?php foreach ($items as $item): ?>
                <?php
                $bg_card_color = $item['bg_card_color'];
                $photo = $item['photo'];
                $name = $item['name'];
                $company = $item['company'];
                $comment = $item['comment'];
                $stars = $item['stars'];
                ?>
                <div class="reviews-card__wrapper <?php echo $bg_card_color; ?>">
                  <header class="reviews-card__header">
                    <div class="reviews-card__body">
                      <img src="<?php echo $photo['url']; ?>" class="reviews-card__author" alt="<?php echo $photo['alt']; ?>" />
                      <div class="reviews-card__info">
                        <div class="reviews-card__name"><?php echo $name; ?></div>
                        <div class="reviews-card__company"><?php echo $company; ?></div>
                      </div>
                    </div>
                    <div class="reviews-card__quote">
                      <?php get_template_part('template-parts/icons/icon-quote'); ?>
                    </div>
                  </header>
                  <p class="reviews-card__desk"><?php echo $comment; ?></p>
                  <div class="reviews-card__rating reviews-rating">
                    <?php foreach ($stars as $item_star): ?>
                      <?php
                      $star = $item_star['star'];
                      ?>
                      <div class="reviews-rating__star is-active"><?php echo $star; ?></div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
