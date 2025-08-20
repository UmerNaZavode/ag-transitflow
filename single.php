<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ar-starter
 */
get_header(); ?>
<?php
$single_artical = get_field('single_artical');
$title = get_the_title();
$category = get_the_category();
$category_name = !empty($category) ? $category[0]->name : '';
$categories = get_terms(['taxonomy' => 'category', 'hide_empty' => true]);
$category_names = wp_list_pluck($categories, 'name');
$category_counts = wp_list_pluck($categories, 'count');
$single_info = get_field('single_info', 10750);
$socials = $single_info['socials'];
$help_title = $single_info['help_title'];
$help_description = $single_info['help_description'];
$button_text = $single_info['button_text'];
$contact_tag = $single_info['contact_tag'];
$contact_phone = $single_info['contact_phone'];
$contact_email = $single_info['contact_email'];
?>
<section class="single">
  <div class="single-intro">
    <?php
    if (has_post_thumbnail()) {
      the_post_thumbnail('large', ['class' => 'single-intro__thumbnail']);
    }
    ?>
    <div class="single-intro__body container">
      <div class="single-intro__wrapper">
        <?php get_template_part('template-parts/icons/icon-calendar-alt'); ?>
        <div class="single-intro__date">
          <span class="single-intro__day"><?php echo get_the_date('d'); ?></span>
          <span class="single-intro__month"><?php echo get_the_date('F'); ?></span>
        </div>
      </div>
      <h1 class="single-intro__title title"><?php echo $title; ?></h1>
    </div>
  </div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php
      $category = get_the_category();
      ?>

      <div class="single-body container">
        <div class="single-body__left">
          <?php the_content(); ?>
          <footer class="single-body__footer">
            <div class="single-body__socials">
              <ul>
                <?php foreach ($socials as $item): ?>
                  <?php
                  $icon = $item['icon'];
                  $url = $item['url'];
                  ?>
                  <li>
                    <a class="single-body__link" href="<?php echo $url; ?>" target="_blank">
                      <img src="<?php echo $icon['url']; ?>" class="single-body__icon" alt="<?php echo $icon['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="single-body__category">
              Category : <?php echo $category_name; ?>
            </div>
          </footer>
        </div>
        <div class="single-body__right">
          <div class="single-body__categories single-body__default">
            <h5>Categories</h5>
            <ul>
              <?php foreach ($category_names as $key => $name): ?>
                <li><?php echo $name; ?> <span>(<?php echo $category_counts[$key]; ?>)</span></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="single-body__help single-body__default">
            <h5><?php echo $help_title; ?></h5>
            <div class="single-body__description"><?php echo $help_description; ?></div>
            <button class="single-body__button" type="button">
              <a href="#"><?php echo $button_text; ?></a>
            </button>
          </div>
          <div class="single-body__contacts single-body__alt">
            <div class="single-body__tag tag"><?php echo $contact_tag; ?></div>
            <div class="single-body__info">
              <a href="tel:<?php echo clear_phone($contact_phone); ?>" target="_blank">
                Need help?<br>
                <?php echo $contact_phone; ?>
              </a>
            </div>
            <div class="single-body__info">
              <a href="mailto:<?php echo $contact_email; ?>" target="_blank">
                Email<br> <?php echo $contact_email; ?>
              </a>
            </div>
          </div>
        </div>
      </div>

  <?php endwhile;
  endif; ?>
</section>

<?php get_footer(); ?>
