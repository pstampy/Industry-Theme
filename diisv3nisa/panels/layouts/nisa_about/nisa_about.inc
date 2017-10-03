<?php

/**
 * @file
 * Defines a naked two-column layout with a subcolumn bar.
 */

// Plugin definition.
$plugin = array(
  'title' => t('NISA About'),
  'category' => t('NISA'),
  'icon' => 'nisa_about.png',
  'theme' => 'nisa_about',
  'regions' => array(
  	'top' => t('Top'),
    'middle' => t('Middle'),
    'left_top' => t('Left Top'),
    'right_top' => t('Right Top'),
    'center' => t('Center'),
    'bottom' => t('Bottom'),
  ),
);
