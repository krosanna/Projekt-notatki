<?php

    declare(strict_types = 1);

    namespace App;

    require_once("debug.php");

    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = null;
    }

    dump($action);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Moje notatki</h1>
    </div>
    <div class="conteiner">
        <div class="menu">
            <ul>
                <li>
                    <a href="/">Lista notatek</a>
                </li>
                <li>
                    <a href="/?action=create">Nowa notatka</a>
                </li>
            </ul>
        </div>
        <div>
            tresc
        </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>