<?php

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);

// Fetch all records from the database
$mokiniai = Mok\Models\Mokinys::all();

// Create an HTML table to display the records
echo "<table>";
echo "<thead><tr><th>ID</th><th>Vardas</th><th>Pavardė</th><th>Klasė</th><th>Veiksmai</th></tr></thead>";
echo "<tbody>";
foreach ($mokiniai as $mokinys) {
    echo "<tr>";
    echo "<td>{$mokinys->id}</td>";
    echo "<td>{$mokinys->vardas}</td>";
    echo "<td>{$mokinys->pavarde}</td>";
    echo "<td>{$mokinys->klase}</td>";
    echo "<td>";
    echo "<a href='update?id={$mokinys->id}'>keisti</a> ";
    echo "<a href='delete?id={$mokinys->id}'>trinti</a> ";
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";