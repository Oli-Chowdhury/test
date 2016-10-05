<?php
/**
 * @file
 * Francis Crick Two Column with header.
 */

/**
 * Implementation of hook_panels_layouts().
 */
// Plugin definition.
$plugin = array(
  'title' => t('Francis Crick Two Column with header'),
  'category' => t('Francis Crick'),
  'icon' => '2col-header.png',
  'theme' => '2col-header',
  'css' => '2col-header.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left'),
    'right' => t('Right'),
  ),
);
