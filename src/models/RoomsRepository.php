<?php

namespace App\Models;

use App\Models\DataBaseRepository;

class RoomsRepository{


    public function GetAllRooms(): array
    {

        $pdo = new DataBaseRepository();
        $pdo = $pdo->getConnection();

        $select = $pdo->prepare("SELECT * FROM rooms");
        $select->execute();

        return $select->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function addRoom($numbers,$status,$capacity){

        $pdo = new DataBaseRepository();
        $pdo = $pdo->getConnection();

        $insert = $pdo->prepare("INSERT INTO rooms(numbers,statut,capacity) VALUES(?,?,?)");
        $insert->execute([$numbers,$status,$capacity]);



    }

    public function showOne(int $idRoom){

        $pdo = new DataBaseRepository();
        $pdo = $pdo->getConnection();

        $select = $pdo->prepare("SELECT * FROM rooms WHERE id = ?");
        $select->execute([$idRoom]);

        return $select->fetch(\PDO::FETCH_ASSOC);


    }

    public function getRoomFree(){

        $pdo = new DataBaseRepository();
        $pdo = $pdo->getConnection();

        $select = $pdo->prepare("SELECT * FROM rooms WHERE statut = ?");
        $select->execute([0]);

        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }
}