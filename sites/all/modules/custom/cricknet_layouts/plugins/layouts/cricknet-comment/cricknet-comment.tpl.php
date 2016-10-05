<?php
/**
 * @file
 * Layout for Francis Crick Comment layout.
 */

/**
 * Layout for Francis Crick Comment layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="comment-item">
  <div class="comment-top">
    <div class="comment-profile"><?php print $content['user_profile']; ?></div>
    <div class="comment-content"><?php print $content['comment_content']; ?></div>
  </div>
  <div class="comment-bottom">
    <?php print $content['comment_links']; ?>
  </div>
</div>
