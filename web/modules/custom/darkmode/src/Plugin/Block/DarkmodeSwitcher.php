<?php

namespace Drupal\darkmode\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Darkmode Switcher' block.
 *
 * @Block(
 *   id = "darkmode_switcher_block",
 *   admin_label = @Translation("Darkmode Switcher"),
 * )
 */
class DarkmodeSwitcher extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#theme' => 'darkmode_switcher',
            '#attached' => [
                'library' => [
                    'darkmode/darkmode_switcher',
                ],
            ],
        ];
    }
}