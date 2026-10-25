<?php

declare(strict_types=1);

namespace App;

class View
{
    public function render(?string $page): void
    {
        include_once("templates/layout.php");
        if ($page === 'create') {
            include_once("templates/create.php");
        } else {
            include_once("templates/list.php");
        }
    }
}