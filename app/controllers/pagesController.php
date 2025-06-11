<?php

namespace App\Controllers\PagesController;

use \App\Models\PagesModel; //Permet de mettre uniquement le dernier terme devant le "find"
use \PDO; //Permet d'évité de DEVOIR mettre le \ devant le PDO dans l'appel de la function

function homeAction(PDO $connexion): void{
    include_once '../app/models/pagesModel.php';
    $randommonster = PagesModel\findRandomOne($connexion);
    $lastmonsters = PagesModel\findLast9($connexion);
    global $content;
    ob_start();
    include "../app/views/pages/home.php";
    $content = ob_get_clean();
}