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
        <h3> nowa notatka </h3>
        <?php echo htmlentities($action); ?>

    </div>
    <div class="footer">

    </div>
</body>
</html>