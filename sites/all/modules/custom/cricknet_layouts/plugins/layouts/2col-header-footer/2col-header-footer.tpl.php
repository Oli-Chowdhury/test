<?php
/**
 * @file
 * Layout for Francis Crick Header Two Column Footer.
 */

/**
 * Francis Crick Two Column.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="two-col-header-footer">
  <div class="header"><?php print $content['header']; ?></div>
   <div class="content-wrapper">
    <div class="left"><?php print $content['left']; ?></div>
    <div class="right"><?php print $content['right']; ?></div>
  </div>
  <div class="footer">
    <div class="footer-inner">
      <?php print $content['footer']; ?>
    </div>
  </div>
</div>
