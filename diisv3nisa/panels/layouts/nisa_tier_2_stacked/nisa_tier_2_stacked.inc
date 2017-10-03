<?php

/**
 * @file
 * Defines a naked two-column layout with a subcolumn bar.
 */

// Plugin definition.
$plugin = array(
  'title' => t('NISA Tier 2 Stacked'),
  'category' => t('NISA'),
  'icon' => 'nisa_tier_2_stacked.png',
  'theme' => 'nisa_tier_2_stacked',
  'regions' => array(
    'top' => t('Top'),
    'center' => t('Center'),
    'left-column' => t('Left'),
    'right-column' => t('Right'),
    'bottom' => t('Bottom'),
    'bottom-left' => t('Bottom Left'),
    'bottom-right' => t('Bottom Right'),
  ),
);
