<?php
/**
 * @file
 * Francis Crick One Column with Header.
 */

/**
 * Implementation of hook_panels_layouts().
 */

// Plugin definition.
$plugin = array(
  'title' => t('Francis Crick One Column with Header'),
  'category' => t('Francis Crick'),
  'icon' => '1col-header.png',
  'theme' => '1col-header',
  'regions' => array('header' => t('Header'), 'content' => t('Content')),
);
