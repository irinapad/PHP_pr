
<link rel="stylesheet" href="style.css">
<?php

require_once 'vendor/autoload.php';

#$test = new \Mok\Models\Mokinys('O', 'B', '4b');
#$test->save();
#\Mok\Models\Mokinys::all();

$url = explode('/', $_SERVER['REQUEST_URI']);
$path = explode('?',$url[count($url)-1])[0];
print_r($path);
echo "<br>";

switch ($path) {
    case 'all':
        include 'src/Views/all.php';
        break;
    case 'create':
        include 'src/Views/form_create.php';
        break;
    case 'update':
        include 'src/Views/form_update.php';
        break;
    case 'delete':
        include 'src/Controllers/delete.php';
        break;
    default:
        include 'src/Views/all.php';
}

#include 'src/Views/all.php';
#include 'src/Views/form_create.php';
#include 'src/Views/form_update.php';