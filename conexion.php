<?php

$user = "root";
$password = "2311";
$databaseName = "moringa-test";
$server = "localhost";

$conexion = new mysqli($server, $user, $password, $databaseName);

if ($conexion->connect_errno) {
    die("La conexión ha fallado");
}