<?php

declare(strict_types=1);

namespace Drupal\file_improvements\HookHandlers\PreprocessHandlers;

use Ordermind\DrupalTengstromShared\HookHandlers\PreprocessHandlerInterface;

class PreprocessFileLinkHandler implements PreprocessHandlerInterface {

  public function preprocess(array &$variables): void {
    dump($variables);
  }

}
