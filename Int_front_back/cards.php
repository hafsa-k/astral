<?php
  include "./nav.php";

?>


<!--   
  Cartes de tarot -->
  <h2>Cards dictionnary</h2>
    <div class="container">
        <div class="row">
        <?php
        $json_data = file_get_contents('data.json');
        // Décoder le JSON en un tableau associatif en PHP
        $data = json_decode($json_data, true);

        // Vérifier si la clé "datas" existe dans le tableau
        if (array_key_exists('datas', $data)) {
            $cards = $data['datas'];

            echo '<ul class="list-unstyled">'; // Commencer la liste non ordonnée
            $count = 0; // Initialiser un compteur
            foreach ($cards as $card) {
                if ($count % 4 == 0) {
                    // Commencer une nouvelle ligne Bootstrap (div.row)
                    if ($count > 0) {
                        echo '</div>';
                    }
                    echo '<div class="row">';
                }

                echo '<div class="col-3">'; // Chaque carte dans une colonne de largeur 3 (total de 4 colonnes par ligne)
                echo '<li>';

                echo '<img class="tarot" src="' . $card['image_url'] . '" alt="' . $card['nom'] . '"><br><br>';
                echo 'Nom: ' . $card['nom'] . '<br>';
                echo 'Description: ' . $card['description'] . '<br> <br> <br>';
                echo '</li>';
                echo '</div>';
                $count++;
            }
            echo '</div>'; // Fermer la dernière ligne Bootstrap
            echo '</ul>'; // Fermer la liste non ordonnée
        } else {
            echo 'La clé "datas" n\'existe pas dans le JSON.';
        }
    ?>
    </div>
</div>
</body>
</html>