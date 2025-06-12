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
    $monsters = MonstersModel\findAll($connexion);
    global $content;
    ob_start();
    include "../app/views/monsters/index.php";
    $content = ob_get_clean();
}