<?php
$footer_home = get_field('footer_home');
$image = $footer_home['image'];
?>
<section class="home-footer">
  <img src="<?php echo $image['url']; ?>" class="home-footer__image" width="1920" height="412" alt="<?php echo $image['alt']; ?>" />
  <!-- <img src="./../src/img/home-page/footer.jpg" width="1920" height="412" alt="" class="home-footer" loading="lazy"> -->
</section>
