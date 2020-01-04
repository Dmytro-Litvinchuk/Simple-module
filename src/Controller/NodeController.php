<?php

namespace Drupal\my_text\Controller;

use Drupal\node\NodeInterface;

/**
 * Class NodeController.
 *
 * @package Drupal\my_text\Controller
 */
class NodeController {

  /**
   * Returns a simple page.
   *
   * @param \Drupal\node\NodeInterface $node
   *   The node to export.
   *
   * @return array
   *   A simple renderable array.
   */
  public function getBody(NodeInterface $node) {
    $element = [
      '#markup' => $node->body->value,
    ];
    return $element;
  }

  /**
   * Returns a page title.
   *
   * @param \Drupal\node\NodeInterface $node
   *   The node to export.
   *
   * @return string
   *   A simple string.
   */
  public function getTitle(NodeInterface $node) {
    return $node->getTitle();
  }

}
