<?php
require_once '../../vendor/autoload.php';

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //gauname formos laukus
    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];
    $klase = $_POST['klase'];

    //Sukuriam nauja mokini ir issaugome ji DB
    $mokinys = new Mok\Models\Mokinys($vardas, $pavarde, $klase);
    $mokinys->save();

    // TODO: Parodyti pranesima, kad iterpta arba klaida, jei ivyko exceptionas


    // Parodyti sarasa
    header('Location: ../../all');
    exit();
}