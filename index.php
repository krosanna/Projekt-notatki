<?php

    declare(strict_types = 1);

    namespace App;

    require_once("debug.php");

    $action = $_GET['action'] ?? null;
    // if(!empty($_GET['action'])) {
    //     $action = $_GET['action'];
    // } else {
    //     $action = null;
    // }

if ($action === 'create') {
    include_once("templates/create.php");
} else {
    include_once("templates/list.php");
}
   
   