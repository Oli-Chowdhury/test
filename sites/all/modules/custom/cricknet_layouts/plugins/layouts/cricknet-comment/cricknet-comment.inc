<?php
/**
 * @file
 * Francis Crick Comment layout.
 */

/**
 * Implementation of hook_panels_layouts().
 */

// Plugin definition.
$plugin = array(
  'title' => t('Francis Crick comment layout'),
  'category' => t('Francis Crick'),
  'icon' => 'cricknet-comment.png',
  'theme' => 'cricknet-comment',
  'regions' => array(
    'user_profile' => t('User profile'),
    'comment_content' => t('Comment content'),
    'comment_links' => t('Comment links'),
  ),
);
