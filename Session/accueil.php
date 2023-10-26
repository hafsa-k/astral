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
        print( "Bienvenue sur Astral, ". $_SESSION['nom']);

        ?>

        
        <button id="monBouton">Cliquez ici</button>

        <script>
        document.getElementById("monBouton").addEventListener("click", function() {
            var id_carte = 1; // Remplacez cette valeur par l'ID souhaité

            // Construire l'URL avec l'ID incrusté
            var url = "https://localhost/astral/Session/accueil.php?id_carte=" + id_carte;

            // Ouvrir l'URL dans une nouvelle fenêtre ou un nouvel onglet
            window.location.href = url;
        });
    </script>

        <!-- /* <script>
    function ouvrirURL() {
        var id_carte = 1; // Remplacez cette valeur par l'ID souhaité

        // Construire l'URL avec l'ID incrusté
        var url = "https://localhost/astral/Session/accueil.php?id_carte=" + id_carte;

        // Ouvrir l'URL dans une nouvelle fenêtre ou un nouvel onglet
        // window.open(url);
        window.location.href = url;
    }</script>*/ -->

    <?php


// Étape 2 : Récupérer l'utilisateur à partir de la session
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
} else {
    die("Utilisateur non connecté.");
}

// 2. Connecter à la BD
// Connecter à la BD (loginpassbd, tableau Utilisateur)
include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles

    // echo $e->getMessage();
    die();
}

// Étape 4 : Insérer l'ID dans la base de données
    // Vous devrez adapter la requête SQL en fonction de votre schéma de base de données
    // Étape 1 : Récupérer l'ID depuis l'URL
if (isset($_GET['id_carte'])) {
    // $id_url = intval($_GET['id']);
    $id_url = (int)$_GET['id_carte'];
    $sql = "INSERT INTO historique (id_utilisateur, id_carte, dateTir) VALUES (?, ?,  NOW())";
    $stmt = $cnx->prepare($sql);
    $stmt->execute([$user_id, $id_url]);
}
    ?>









</body>
</html>
