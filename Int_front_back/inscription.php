<?php
  include "./nav.php";
?>
<!-- inscription -->




        <div class="form-container">
         <div id="inscription">
         <h2>Inscription</h2>  


         <div class="login">
          <form action="./formInscriptionTraitement.php" method="POST" >
            <input type="text"  name="nom" placeholder="Nom :" required>
            <br><br>
            <input type="email" name="login" placeholder="Email :" required><br><br>
            <input type="password"  name="password" placeholder="Mot de passe :" required><br><br>
            <button type="submit"><p>S'inscrire</p></button>
          </form>
        </div>   
          
        </div>
    </div>
     
      

      

    
</body>
</html>