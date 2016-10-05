<?php
/**
 * @file
 * Francis Crick Two Column with Header and Footer.
 */

/**
 * Implementation of hook_panels_layouts().
 */

// Plugin definition.
$plugin = array(
  'title' => t('Francis Crick Two Column with Header and Footer'),
  'category' => t('Francis Crick'),
  'icon' => '2col-header-footer.png',
  'theme' => '2col-header-footer',
  'css' => '2col-header-footer.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);
