<?php

/**
 * @file
 * Defines a naked two-column layout with a subcolumn bar.
 */

// Plugin definition.
$plugin = array(
  'title' => t('NISA Tier 2'),
  'category' => t('NISA'),
  'icon' => 'nisa_tier_2.png',
  'theme' => 'nisa_tier_2',
  'regions' => array(
    'top' => t('Top'),
    'middle' => t('Middle'),
    'center' => t('Center'),
    'left-column' => t('Left'),
    'right-column' => t('Right'),
    'bottom' => t('Bottom'),
  ),
);
