<?php

/**
 * @file
 * Defines a naked two-column layout with a subcolumn bar.
 */

// Plugin definition.
$plugin = array(
  'title' => t('NISA Tier 3'),
  'category' => t('NISA'),
  'icon' => 'nisa_tier_3.png',
  'theme' => 'nisa_tier_3',
  'regions' => array(
    'top' => t('Top'),
    'left-sidebar' => t('Left'),
    'right-column' => t('Right'),
  ),
);
