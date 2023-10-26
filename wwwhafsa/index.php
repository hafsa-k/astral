<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astral</title>
</head>
<body>
    <?php
        include "./nav.php";
        if (isset($_SESSION['nom'])) {
            echo "Bienvenue sur Astral, " . $_SESSION['nom'];
        } else {
            echo "Bienvenue sur Astral"; // Message par défaut si le nom n'est pas défini en session
        }
    ?>






</body>
</html>