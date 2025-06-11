<?php

use \App\Controllers\MonstersController;

include '../app/controllers/monstersController.php';

switch($_GET['monsters']):
    case 'show': // ?monsters=show&id=x
        MonstersController\showAction($connexion, $_GET['id']);
    break;
    default: 
        MonstersController\indexAction($connexion);
    break;

endswitch;