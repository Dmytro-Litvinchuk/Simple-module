<?php

namespace Drupal\my_text\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MyTextController.
 *
 * @package Drupal\my_text\Controller
 */
class MyTextController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, everyone, and welcome to the page!'),
    ];
  }

}
