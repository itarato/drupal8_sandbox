<?php
/**
 * @file
 */

namespace Drupal\drupal8_sandbox\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PageController
 * @package Drupal\drupal8_sandbox\Controller
 */
class PageController extends ControllerBase {

  public function getPage() {
    return [
      [
        '#markup' => 'Hello World!',
      ],
    ];
  }

}
