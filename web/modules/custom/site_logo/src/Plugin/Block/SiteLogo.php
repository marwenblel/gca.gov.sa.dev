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
        $site_name = \Drupal::config('system.site')->get('name');
        $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
        // Load the configuration object for gca theme settings.
        $gca_config = \Drupal::config('gca.settings');
        $use_default_logo = (int) $gca_config->getRawData()['logo']['use_default'];
        if($use_default_logo) {
            $logo = $basePath. 'themes/custom/gca/logo.png';
        } else {
            $filename = str_replace("public://", "", $gca_config->getRawData()['logo']['path']);
            $logo = $basePath. 'sites/default/files/'.$filename;
        }
        return [
            '#markup' => '<a href="http://localhost/gca.gov.sa.dev/web"><img src="' . htmlspecialchars($logo) . '" alt="' . htmlspecialchars($site_name) . '"></a>',
            '#allowed_tags' => ['img', 'a'],
        ];

    }
}

