<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

function machinevision_preprocess_page(&$variables) {
  if (isset($variables['node'])) {
    $node_type = $variables['node']->type;
    $variables['theme_hook_suggestions'][] = 'page__' . $node_type;
  }
}
