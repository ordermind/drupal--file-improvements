<?php

declare(strict_types=1);

namespace Drupal\file_improvements\HookHandlers;

class ThemeRegistryAlterHandler {

  public function alter(array &$themeRegistry): void {
    if (empty($themeRegistry['file_link']['variables'])) {
      return;
    }

    $themeRegistry['file_link']['variables']['trim'] = NULL;
  }

}
