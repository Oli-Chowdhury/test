<?php
/**
 * @file
 * Layout for Francis Crick Two Column Profile ith Header.
 */

/**
 * Implementation of hook_panels_layouts().
 */
$plugin = array(
  'title' => t('Francis Crick user Profile Two Columns with header'),
  'category' => t('Francis Crick'),
  'icon' => '2col-profile-header.png',
  'theme' => '2col-profile-header',
  'regions' => array(
    'header' => t('Header'),
    'info-left' => t('Information Left'),
    'info-right' => t('Information Right'),
    'left' => t('Left'),
    'right' => t('Right'),
  ),
);
