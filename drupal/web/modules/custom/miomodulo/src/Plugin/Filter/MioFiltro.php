<?php
namespace Drupal\miomodulo\Plugin\Filter;

use Drupal\filter\Plugin\FilterBase;
use Drupal\filter\FilterProcessResult;

/**
 * Mio filtro Custom
 * @Filter(
 *   id = "mio_filtro_custom",
 *   title = @Translation("Mio filtro custom"),
 *   category = @Translation("Corso Drupal"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE
 * ,
 * )
 */

class MioFiltro extends FilterBase {
    public function process ($text, $langcode){ //per il filtro
        $miastringa = $text ?? '';
        $miastringa = str_replace('[hi]','<h3>Ciao dal mio filtro</h3>', $miastringa);
        return new FilterProcessResult($miastringa);   
    }
}