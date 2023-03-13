<?php

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //gauname nurodyto mokinio informacija
    $id = $_GET['id'];
    $mokinys = \Mok\Models\Mokinys::find($id);
}
?>

<form action="src/Controllers/update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $mokinys->id ?>">
    <label for="vardas">Vardas:</label>
    <input type="text" name="vardas" value="<?php echo $mokinys->vardas ?>">
    <br>
    <label for="pavarde">Pavardė:</label>
    <input type="text" name="pavarde" value="<?php echo $mokinys->pavarde ?>">
    <br>
    <label for="klase">Klasė:</label>
    <input type="text" name="klase" value="<?php echo $mokinys->klase ?>">
    <br>
    <input type="submit" value="Išsaugoti">
</form>

<?php

