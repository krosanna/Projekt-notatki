<?php

    declare(strict_types = 1);

    namespace App;

    require_once("src/debug.php");
    require_once("src/View.php");

    $action = $_GET['action'] ?? null;
    // if(!empty($_GET['action'])) {
    //     $action = $_GET['action'];
    // } else {
    //     $action = null;
    // }

    $view = new View();
    $view->render($action);
    dump($view);

   
   
   