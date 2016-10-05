<?php
/**
 * @file
 * Layout for Francis Crick One Column with Header.
 */

/**
 * Francis Crick One Column with Header.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="one-col-header">
  <div class="header"><?php print $content['header']; ?></div>
  <div class="content"><?php print $content['content']; ?></div>
</div>
