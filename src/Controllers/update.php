<?php
require_once '../../vendor/autoload.php';

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //gauname nurodyto mokini
    $id = $_POST['id'];
    $mokinys = Mok\Models\Mokinys::find($id);

    // Atnaujiname jo informacija formos lauku duomenimis
    $mokinys->vardas = $_POST['vardas'];
    $mokinys->pavarde = $_POST['pavarde'];
    $mokinys->klase = $_POST['klase'];

    // Issaugome DB
    $mokinys->save();

    // TODO: Parodyti pranesima, kad pakeista arba klaida, jei ivyko exceptionas


    // Parodyti sarasa
    //include '../../src/Views/all.php';
    header('Location: ../../all');
    exit();
}