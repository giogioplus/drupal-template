<?php
namespace Drupal\miomodulo\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Mio Blocco Custom
 * @Block(
 *   id = "mio_blocco_custom",
 *   admin_label = @Translation("Mio blocco custom"),
 *   category = @Translation("Corso Drupal"),
 * )
 */

class MioBlocco extends BlockBase {

    public function build() {  //per il blocco
      $now = \Drupal::service('date.formatter')->format(time(),'custom','d/m/Y H:i');
      //dump($now);
      return [
        '#markup' => "<h2>mio blocco custom </h2><br/> ora sono le ".$now,
      ];
    }
}
