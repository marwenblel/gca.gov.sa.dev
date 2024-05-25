<?php
namespace Drupal\site_name\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * Provides a 'Site Name' Block.
 *
 * @Block(
 *   id = "site_name",
 *   admin_label = @Translation("Site Name"),
 * )
 */
class SiteName extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        $site_name = \Drupal::config('system.site')->get('name');
        return [
            '#markup' => '<h3>' . $this->t('@site_name', ['@site_name' => $site_name]) . '</h3>',
            '#allowed_tags' => ['h3'],
        ];
    }
}
