<?php


$pdo = new PDO("mysql:host=localhost;dbname=hotel", "root", "");

echo "Bienvenu dans le script de la MORT !!";

for($i = 1; $i < 130; $i++){

    $chambre = "Room$i";
    $status = rand(0,1);
    $capacity = (int)rand(1,5);

    $prepare = $pdo->prepare("INSERT INTO rooms(numbers,statut,capacity) VALUES(?,?,?)");
    $prepare->execute([$chambre, $status,$capacity]);
    

}

echo "Hacking Terminer";