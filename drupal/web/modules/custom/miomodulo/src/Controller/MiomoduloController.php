<?php

/*
miomodulo cartella del modulo
*/
namespace Drupal\miomodulo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns response for Layout Info route.
 */
class MiomoduloController extends ControllerBase{

    function miaPagina(){
        $miavar['test'] = [
            'nome' => 'giovanna',
        ];
        dump($miavar);
        $nome = $miavar['test']['nome'] ?? 'no nome';
        $msg ='Render html Mia Pagina';
      return [
        '#markup' => '<h2>'.$this->t($msg).'</h2><br>'.$nome,
      ];
    }

}