<?php

declare(strict_types=1);

namespace Drupal\server_general\ThemeTrait;

/**
 * Enum for text color options used in theme wrappers.
 */
enum TextColorEnum: string {
  case LightGray = 'light-gray';
  case Gray = 'gray';
  case DarkGray = 'dark-gray';
}
