<?php
namespace App\Models\MonstersModel;

use \PDO;

function findOneById(PDO $connexion, int $id): array{
    $sql = "SELECT  m.*, 
                    mt.name AS type,
                    r.name AS rarety
            FROM monsters m
            JOIN monster_types mt ON m.type_id = mt.id
            JOIN rareties r ON m.rarety_id = r.id
            WHERE m.id=:id;";
    $rs= $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();                           
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function findAll(PDO $connexion): array{
    $sql = "SELECT  m.*, 
                    mt.name AS type,
                    r.name AS rarety
            FROM monsters m
            JOIN monster_types mt ON m.type_id = mt.id
            JOIN rareties r ON m.rarety_id = r.id
            ORDER BY type ASC,m.name ASC
            LIMIT 9;";
    $rs = $connexion->query($sql);                
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}