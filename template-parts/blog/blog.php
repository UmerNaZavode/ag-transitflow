<?php
$blog = get_field('blog');
$tag = $blog['tag'];
$title = $blog['title'];
$button_text = $blog['button_text'];
$button_url = get_permalink(10750);
$per_page = $args["per_page"] ?? 5;

$posts = new WP_Query([
  "post_type" => "post",
  "posts_per_page" => $per_page,
  "post_status" => "publish",
  "orderby" => "date",
  "order" => "ASC"
]);
?>

<section class="blog">
  <div class="blog__tag tag"><?php echo $tag; ?></div>
  <h2 class="blog__title title"><?php echo $title; ?></h2>

  <div class="blog__body">
    <?php while ($posts->have_posts()): $posts->the_post(); ?>
      <?php
      $single_artical = get_field('single_artical');
      $image = $single_artical['image'];
      $description = $single_artical['description'];
      $title = get_the_title();
      $permalink = get_the_permalink();
      ?>

      <div class="blog__news">
        <div class="blog__left">
          <img src="<?php echo $image['url']; ?>"
            width="453" height="308" class="blog__img"
            alt="<?php echo $image['alt'] ?: get_the_title(); ?>" />
          <a class="blog__img-link" href="<?php echo $permalink; ?>">
            Read More
          </a>
        </div>

        <div class="blog__calendar">
          <?php get_template_part('template-parts/icons/icon-calendar'); ?>
          <div class="blog__date">
            <span class="blog__day"><?php echo get_the_date('d'); ?></span>
            <span class="blog__month"><?php echo get_the_date('F'); ?></span>
          </div>
        </div>

        <div class="blog__info">
          <div class="blog__content">
            <h3 class="blog__subtitle">
              <a class="blog__link" href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
            </h3>
            <?php echo $description; ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
  </div>

  <?php if (is_front_page()): ?>
    <a class="blog__button button button--blue" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
  <?php endif; ?>
</section>
