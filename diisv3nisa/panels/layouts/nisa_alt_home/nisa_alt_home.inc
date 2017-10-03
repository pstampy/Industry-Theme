<?php

/**
 * @file
 * Defines a naked two-column layout with a subcolumn bar.
 */

// Plugin definition.
$plugin = array(
  'title' => t('NISA Home (Alternate)'),
  'category' => t('NISA'),
  'icon' => 'nisa_alt_home.png',
  'theme' => 'nisa_alt_home',
  'regions' => array(
  	'top' => t('Top'),
    'middle' => t('Middle'),
    'left_top' => t('Left Top'),
    'right_top' => t('Right Top'),
    'center' => t('Center'),
    'bottom' => t('Bottom'),
  ),
);
