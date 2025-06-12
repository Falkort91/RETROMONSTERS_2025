<?php

namespace App\Controllers\MonstersController;

use \App\Models\MonstersModel;
use \PDO;

function showAction(PDO $connexion, int $id): void{
    include_once '../app/models/monstersModel.php';
    $monster = MonstersModel\findOneById($connexion,$id);
    global $content;
    ob_start();
    include "../app/views/monsters/show.php";
    $content = ob_get_clean();
}
function indexAction(PDO $connexion): void{
    include_once '../app/models/monstersModel.php';

    // Récupération de la page depuis l'URL
    $page = isset($_GET['monsters']) ? max(1, (int) $_GET['monsters']) : 1;

    // Nombre de cartes par page
    $limit = 9;
    $monsters = MonstersModel\findAll($connexion,$page,$limit);

    // Récupération du nombre total pour afficher les liens de pagination
    $total = MonstersModel\countAll($connexion);
    $pagesTotal = ceil($total / $limit);

    $CURRENT_PAGE = $page;
    $TOTAL_PAGES = $pagesTotal;


    // Transmet à la vue
    global $content;
    ob_start();
    include "../app/views/monsters/index.php";
    $content = ob_get_clean();
}