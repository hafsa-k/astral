<?php
include "./nav.php";
?>
<?php
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
// 3. Obtenir l'utilisateur de la BD (on cherche par login)
// session_start();
if(isset($_SESSION['id'])==true){
    $id=$_SESSION['id'];
}
// Créer la requête
$sql = "SELECT dateTir,heure,carte.nom_carte FROM historique
inner join carte on carte.id_carte=historique.id_carte WHERE historique.id_utilisateur = :id";

// Preparer la requête et la lancer
$stmt = $cnx->prepare($sql);
$stmt->bindValue (":id", $id);
$stmt->execute();

// Obtenir le résultat dans un array
$resArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($resArray);

?>
<!-- Cartes de tarot -->
<h2>Historique </h2>
<!--<div class="container">
    <div class="row">
        
        // $json_data = file_get_contents('data.json');
        // Décoder le JSON en un tableau associatif en PHP
        // $data = json_decode($json_data, true);
        

        // Vérifier si la clé "datas" existe dans le tableau
        // if (array_key_exists('datas', $data)) {
        //     $cards = $data['datas'];

        //     echo '<table class="table table-bordered">'; // Commencer un tableau HTML
        //     echo '<thead><tr><th>Carte tiré</th><th>Date</th><th>Heure</th></tr></thead>'; // En-tête du tableau

        //     foreach ($cards as $card) {
        //         echo '<tr>';
        //         echo '<td>'. $card['nom'] . '</td>';
        //         echo '<td>' . 'inserer date'. '</td>';
        //         echo '<td>' . 'inserer heure'. '</td>';
        //         echo '</tr>';
        //     }

        //     echo '</table>'; // Fermer le tableau HTML
        // } else {
        //     echo 'La clé "datas" n\'existe pas dans le JSON.';
        // }
       
    </div>-->


    <div class="container">
    <div class="row">
        <?php
        // $json_data = file_get_contents('data.json');
        // Décoder le JSON en un tableau associatif en PHP
        $datas =$resArray;
        ?>

<table>
<thead>
<tr>

<th>Date Tir</th>
<th>Heure</th>
<th>Nom</th>

</tr>
</thead>
<tbody>
<?php foreach ($resArray as $row) : ?>
<tr>
<?php foreach ($row as $key => $value) : ?>
<td> <?= $value." " ?> </td><br>
<?php endforeach; ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>


    </div>
</div>
</body>
</html>