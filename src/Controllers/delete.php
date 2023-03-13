<?php

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //gauname nurodyta mokini
    $id = $_GET['id'];
    $mokinys = Mok\Models\Mokinys::find($id);

    // Issaugome DB
    $mokinys->delete();

    // TODO: Parodyti pranesima, kad istrinta arba klaida, jei ivyko exceptionas


    // Parodyti sarasa
    //include '../../src/Views/all.php';
    header('Location: ../../all');
    exit();
}