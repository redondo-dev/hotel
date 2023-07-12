<?php


namespace App\Controllers;

use App\Models\RoomsRepository;

class RoomsController{


    public function add(){
       
        if($_SERVER["REQUEST_METHOD"] != "POST"){
           return;
        }
        
        $dataText= file_get_contents("php://input");
        $dataJson = json_decode($dataText);

        $repo = new RoomsRepository();
        $repo->addRoom($dataJson->numbers,$dataJson->status,$dataJson->capacity);

        echo json_encode(["status" => 201, "message" => "Ajout réussi"]);


    }

    public function showAll(){
        if($_SERVER["REQUEST_METHOD"] != "GET"){
            return;
        }

        $repo = new RoomsRepository();
        $data = $repo->GetAllRooms();

        echo json_encode($data);

    }

    public function showOne(int $id){

        $repo = new RoomsRepository();
        $data = $repo->showOne(htmlspecialchars($id));
        echo json_encode($data);

    }


    public function showRoomFree(){

        $repo = new RoomsRepository();
        $data = $repo->getRoomFree();

        echo json_encode($data);
    }
 

}