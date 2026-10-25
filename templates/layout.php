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
                    <a href="/projekt-kopia/">Lista notatek</a>
                </li>
                <li>
                    <a href="/projekt-kopia/?action=create">Nowa notatka</a>
                </li>
            </ul>
        </div>
    </div>

    <div>
    <?php
    if ($page === 'create') {
            include_once("templates/create.php");
        } else {
            include_once("templates/list.php");
        }
    ?>
    </div>
    <div class="footer">

    </div>
</body>
</html>