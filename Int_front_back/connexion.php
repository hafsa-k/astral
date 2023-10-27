<?php
  include "./nav.php";
?>

<!-- inscription -->





      
<div class="form-container">
  <div id="connexion">
  <h2>Connexion</h2>  


  <div class="login">
   <form action="./loginTraitement.php" method="POST" >
     <input type="email" name="login" placeholder="Email :" required><br><br>
     <input type="password" name="password" placeholder="Mot de passe :" required><br><br>
     <button type="submit"><p>Se connecter</p></button>
   </form>
   <?php
    // on peut obtenir les paramétres (cle->val) de l'URL en utilisant $_GET
    if (isset($_GET['msg']) && $_GET['msg'] == "erreur") {
        print("<h4>Login ou mot password incorrectes</h4>");
    }

    ?>
     <!-- PROBLEME avec ce code, je l'ai commenté car sinon on ne sait pas cliquer sur le bouton submit juste avant-->
   <!-- <a href="#" class="lostpass">Mot de passe oublié ?</a> 
    
 </div>   
   
 </div>
</div>

</body>
</html>