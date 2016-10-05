<?php
/**
 * @file
 * Francis Crick Two Column with header Lab Guide.
 */

/**
 * Implementation of hook_panels_layouts().
 */
// Plugin definition.
$plugin = array(
  'title' => t('Francis Crick Two Column with header Lab Guide'),
  'category' => t('Francis Crick'),
  'icon' => '2col-header-lab-guide.png',
  'theme' => '2col-header-lab-guide',
  'css' => '2col-header-lab-guide.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left'),
    'right' => t('Right'),
  ),
);
