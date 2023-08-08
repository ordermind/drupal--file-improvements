<?php

declare(strict_types=1);

namespace Drupal\file_improvements\HookHandlers\PreprocessHandlers;

use Drupal\Component\Utility\Unicode;
use Ordermind\DrupalTengstromShared\HookHandlers\PreprocessHandlerInterface;

class PreprocessFileLinkHandler implements PreprocessHandlerInterface {

  public function preprocess(array &$variables): void {
    if (empty($variables['trim'])) {
      return;
    }

    if (empty($variables['link']['#title'])) {
      return;
    }

    $variables['link']['#title'] = Unicode::truncate(
      $variables['link']['#title'],
      (int) $variables['trim'],
      FALSE,
      TRUE
    );
  }

}
