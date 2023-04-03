<?php

require 'flight/Flight.php';


Flight::route('/saludar', function () {
    echo 'Hola, bienvenido al módulo de DWCS!';
});

Flight::route('/', function () {
    echo 'hello world!';
});




Flight::route('GET /clientes', function () {
    $setencia = Flight::db()->prepare("SELECT * from clientes");
     $setencia->execute();
     $datos=$setencia->fetchAll();
     Flight::json($datos);
});


Flight::start();


