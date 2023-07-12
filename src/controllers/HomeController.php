<?PHP




namespace App\Controllers;


class HomeController{

    public function index(){
        if($_SERVER["REQUEST_METHOD"] != "GET"){
            return;
        }
        
        echo json_encode(["status" => 200, "message" => "Bienvenu sur la page HomeController"]);
    }

}