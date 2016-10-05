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
  'title' => t('Francis Crick Three Column with header Lab Guide'),
  'category' => t('Francis Crick'),
  'icon' => '3col-header-lab-guide.png',
  'theme' => '3col-header-lab-guide',
  'css' => '3col-header-lab-guide.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left'),
    'center' => t('Center'),
    'right' => t('Right'),
  ),
);
