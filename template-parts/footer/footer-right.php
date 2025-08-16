<?php
$footer = get_field('footer', 'options');
$socials = $footer['socials'];
//$icon = $item['icon'];
//$url = $item['url'];
?>
<div class="footer-right__wrapper">
  <h3 class="footer-right__title title">Subscribe</h3>
  <div class="footer-right__content">
    <?php echo do_shortcode('[contact-form-7 id="5c5d293" title="Untitled"]') ?>
    <div class="footer-right__down">
      <button class="footer-right__button" type="button">Send Now</button>
      <ul class="footer-right__socials-list">
        <?php
        $selected_indexes = [3, 2, 1];
        foreach ($selected_indexes as $index) :
          if (isset($socials[$index])) :
            $item = $socials[$index];
            $icon = $item['icon'];
            $url = $item['url'];
        ?>
            <li class="footer-right__socials-item">
              <a href="<?php echo $url; ?>"><?php echo $icon; ?></a>
            </li>
        <?php
          endif;
        endforeach;
        ?>
      </ul>
    </div>
  </div>
</div>
