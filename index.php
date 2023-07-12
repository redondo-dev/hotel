<?php

require "./vendor/autoload.php";
require "routes.php";
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
get("/", "HomeController", "index");
get("/rooms", "RoomsController", "add");
get("/rooms", "RoomsController", "showAll");

// exercice
get("/rooms/:id", "RoomsController", "showOne"); //GET Recupère la chambre en fonction de l'id
get("/rooms/status", "RoomsController", "showRoomFree"); // GET recupere les chambre libres
