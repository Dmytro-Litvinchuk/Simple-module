<?php

namespace Drupal\my_text\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: my simple text' block.
 *
 * @Block(
 *   id = "my_text_block",
 *   admin_label = @Translation("Example: my simple text"),
 *   category = @Translation("Custom"),
 * )
 */
class MyTextBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build() {
    return [
      '#markup' => $this->t("Hello everyone! Welcome on my block."),
    ];
  }

}
