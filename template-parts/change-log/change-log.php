<?php
$change_log = get_field('change_log');
$version = $change_log['version'];
$info = $change_log['info'];
?>

<section class="change-log">
  <div class="change-log__wrapper">
    <div class="change-log__version"><?php echo $version; ?></div>
    <div class="change-log__info"><?php echo $info; ?></div>
  </div>
</section>
