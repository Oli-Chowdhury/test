<?php
/**
 * @file
 * Twocol-profile-header.tpl.php.
 */

?>
<div class="two-col-header">
  <?php if (!empty($content['header'])) : ?>
    <div class="header">
        <?php print $content['header']; ?>
    </div>
  <?php endif; ?>
  <div class="content-wrapper">
    <div class="left">
      <?php if (!empty($content['info-left'])) : ?>
        <div class="info-left">
          <?php print $content['info-left']; ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($content['info-right'])) : ?>
        <div class="info-right">
          <?php print $content['info-right']; ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($content['left'])) : ?>
        <?php print $content['left']; ?>
      <?php endif; ?>
    </div>
    <div class="right">
      <?php if (!empty($content['right'])) : ?>
        <?php print $content['right']; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
