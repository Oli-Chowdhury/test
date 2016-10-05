<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">

  <?php print render($content['field_images']); ?>


<a href="<?php print $node_url; ?>"><h1 class="post-title"><?php print $title; ?></a></h1>
 
  <?php print render($content['field_subtitle']); ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_subtitle']);
    hide($content['field_images']);
    print render($content);
  ?>

</div> <!-- /node-->
