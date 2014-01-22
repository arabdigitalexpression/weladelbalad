<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Welad Single column'),
  'category' => t('Columns: 1'),
  'icon' => 'welad.png',
  'theme' => 'welad',
  'css' => 'welad.css',
  'regions' => array('middle' => t('Main column'),'top' => t('Top column') ),
);
