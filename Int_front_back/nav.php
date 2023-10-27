    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartes de Tarot</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
      
    <nav class="navbar navbar-expand-lg   ">
        <a class="navbar-brand" href="index.php"><img class="logo" src="./Assets/images/logo2.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="cards.php">Carte</a>
            </li>
            <?php
            session_start();
            if(isset($_SESSION['nom'])==true){
              print('<li class="nav-item">
              <a class="nav-link" href="historique.php">Historique</a>
              </li>');
            }else{
              print('<li></li>');
            }
            ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="historique.php">Historique</a>
            </li> -->
            <?php
            // session_start();
            if(isset($_SESSION['nom'])==true){
              print('<li></li>');
            }else{
              print('<li class="nav-item">
              <a class="nav-link" href="inscription.php">Inscription</a>
            </li>');
            }
            ?>
            <?php
            // session_start();
            // print($_SESSION['nom']);
            if(isset($_SESSION['nom'])==true){
              print('<li></li>');
            }else{
              print('<li class="nav-item">
              <a class="nav-link" href="connexion.php">Connexion</a>
            </li>');
            }
            // <li class="nav-item">
              //<a class="nav-link" href="connexion.php">Connexion</a>
           // </li> 
            ?>
            <?php
            // session_start();
            // print($_SESSION['nom']);
            if(isset($_SESSION['nom'])==true){
              print('<li class="nav-item">
              <a class="nav-link" href="logout.php">Déconnexion</a>
            </li>');
            }
        ?>
        
          </ul>
        </div>
      </nav>

