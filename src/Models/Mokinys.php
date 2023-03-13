<?php

namespace Mok\Models;

// Connect to MariaDB database
$host = 'localhost';
$username = 'root';
$password = 'oop';
$database = 'oop';

$conn = mysqli_connect($host, $username, $password, $database);

class Mokinys
{
    public $id;
    public $vardas;
    public $pavarde;
    public $klase;

    // konstruktorius
    function __construct($vardas, $pavarde, $klase) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->klase = $klase;
    }

    // Save metodas naujo ar pakeisto mokinio issaugojimui DB
    function save() {
        global $conn;

        if ($this->id) {
            // Update existing record
            $sql = "UPDATE mokiniai SET vardas='$this->vardas', pavarde='$this->pavarde', klase='$this->klase' WHERE id=$this->id";
            mysqli_query($conn, $sql);
        } else {
            // Insert new record
            $sql = "INSERT INTO mokiniai (vardas, pavarde, klase) VALUES ('$this->vardas', '$this->pavarde', '$this->klase')";
            mysqli_query($conn, $sql);
            $this->id = mysqli_insert_id($conn);
        }
    }

    // Delete metodas mokinio trinimui is DB
    function delete() {
        global $conn;

        $sql = "DELETE FROM mokiniai WHERE id=$this->id";
        mysqli_query($conn, $sql);
    }

    // find statinis metodas mokinio informacijos gavimui is DB
    static function find($id) {
        global $conn;

        $sql = "SELECT * FROM mokiniai WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $mokinys = new Mokinys($row['vardas'], $row['pavarde'], $row['klase']);
            $mokinys->id = $row['id'];
            return $mokinys;
        } else {
            return null;
        }
    }

    // all statitnis metodas visu mokiniu informacijos isvardinimui
    static function all() {
        global $conn;

        $sql = "SELECT * FROM mokiniai";
        $result = mysqli_query($conn, $sql);

        $mokiniai = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $mokinys = new Mokinys($row['vardas'], $row['pavarde'], $row['klase']);
            $mokinys->id = $row['id'];
            $mokiniai[] = $mokinys;
        }

        return $mokiniai;
    }
}