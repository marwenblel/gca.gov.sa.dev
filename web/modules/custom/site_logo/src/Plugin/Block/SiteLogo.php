<?php

namespace Drupal\site_logo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Site Logo' Block.
 *
 * @Block(
 *   id = "site_logo",
 *   admin_label = @Translation("Site Logo"),
 * )
 */
class SiteLogo extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
        // Load the configuration object for Bartik theme settings.
        $gca_config = \Drupal::config('gca.settings');
        $use_default_logo = (int) $gca_config->getRawData()['logo']['use_default'];
        if($use_default_logo) {
            $url = $basePath. 'themes/custom/gca/logo.png';
        } else {
            $filename = str_replace("public://", "", $gca_config->getRawData()['logo']['path']);
            $url = $basePath. 'sites/default/files/'.$filename;
        }
        return [
            '#markup' => '<img src=' . $url. '></img>',
            '#allowed_tags' => ['img']
        ];
    }


}
