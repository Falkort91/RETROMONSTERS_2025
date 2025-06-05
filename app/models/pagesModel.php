<?php
// Ici viennent les requêtes SQL

namespace App\Models\PagesModel;

use \PDO; //Permet d'évité de DEVOIR mettre le \ devant le PDO dans l'appel de la function (i on n'utilise pas le use PDO on DOIT mettre le "\" devant le PDO des function)

function findRandomOne(PDO $connexion){
    $sql = "SELECT  m.*, 
                    mt.name AS type,
                    r.name AS rarety
            FROM monsters m
            JOIN monster_types mt ON m.type_id = mt.id
            JOIN rareties r ON m.rarety_id = r.id
            ORDER BY RAND()
            LIMIT 1;";
    $rs = $connexion->query($sql);                  // le "query" est utilisé quand toutes les données sont connues dés le départ et qui ne nécessite pas d'action de l'utilisateur
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}