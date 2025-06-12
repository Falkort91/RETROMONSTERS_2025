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

function findAll(PDO $connexion, int $page = 1, int $limit = 9): array {
    $offset = ($page - 1) * $limit;

    $sql = "SELECT m.*, 
                   mt.name AS type,
                   r.name AS rarety
            FROM monsters m
            JOIN monster_types mt ON m.type_id = mt.id
            JOIN rareties r ON m.rarety_id = r.id
            ORDER BY m.created_at DESC
            LIMIT :limit OFFSET :offset";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->bindValue(':offset', $offset, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

/* Compter le nombre total de monstre pour la pagination */
function countAll(PDO $connexion): int {
    $sql = "SELECT COUNT(*) FROM monsters";
    return (int) $connexion->query($sql)->fetchColumn();
}
