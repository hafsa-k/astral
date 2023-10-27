<?php
include "./nav.php";
?>

<!-- Cartes de tarot -->
<h2>Historique </h2>
<div class="container">
    <div class="row">
        <?php
        $json_data = file_get_contents('data.json');
        // Décoder le JSON en un tableau associatif en PHP
        $data = json_decode($json_data, true);

        // Vérifier si la clé "datas" existe dans le tableau
        if (array_key_exists('datas', $data)) {
            $cards = $data['datas'];

            echo '<table class="table table-bordered">'; // Commencer un tableau HTML
            echo '<thead><tr><th>Carte tiré</th><th>Date</th><th>Heure</th></tr></thead>'; // En-tête du tableau

            foreach ($cards as $card) {
                echo '<tr>';
                echo '<td>'. $card['nom'] . '</td>';
                echo '<td>' . 'inserer date'. '</td>';
                echo '<td>' . 'inserer heure'. '</td>';
                echo '</tr>';
            }

            echo '</table>'; // Fermer le tableau HTML
        } else {
            echo 'La clé "datas" n\'existe pas dans le JSON.';
        }
        ?>
    </div>
</div>
</body>
</html>