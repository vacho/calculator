<?php

/**
 * @file
 * Contains Drupal\calculator\Controller\DefaultController.
 */

namespace Drupal\calculator\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return "Hello " . $name . " !";
  }
}
