<?php
  include "./nav.php";
?>

<!--   
  Cartes de tarot -->

   <div id="jeux">
   <!--<h1>Astral</h1>-->
   <?php   if (isset($_SESSION['nom'])) {
      print("<h1>Bienvenue sur Astral, " . $_SESSION['nom']."</h1>");
  } else {
      print("<h1>Bienvenue sur Astral"."</h1>"); // Message par défaut si le nom n'est pas défini en session
  }?>

    <div class="jeu">
    <iframe src="http://localhost/astral/Int_front_back/Builds/index.html"
 
 overflow:hidden;
  
 width="100%"
  
 height="680px"
  
 title="VRMap"
  
 scrolling="no"
  
 overflow="hidden"
  
 overflow-y="hidden"
  
 allowfullscreen="true";>
  
 Browser not compatible.
  
 </iframe>
  

    </div>
    

<div class="container">
  <div class="row">
    <div class="col-10">
      <h3> What is Astral ?</h3>
      <p class="parag">  Lorem ipsum dolor sit amet, consectetur adipiscinapien quis efficitur venenatis, enim ligula porttitor mauris, nec porta eros augue in metus. Praesent quis enim at purus scelerisque posuere sit amet id ante. Praesent eget orci ligula. In hac habitasse platea dictumst. Aenean blandit purus massa, non congue elit lobortis vel. Suspendisse in lacus orci. Morbi venenatis, dui nec mollis finibus, sem leo venenatis sapien, quis efficitur massa metus ac augue. Vivamus quam sem, egestas id porta ut, fringilla quis enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque scelerisque bibendum sapien, eu hendrerit odio fringilla sed. Praesent consequat efficitur nunc vel eleifend. Cras rutrum, sapien ac pharetra dignissim, dui tortor elementum ligula, quis consequat libero lacus nec ante.  </p>
    </div>
  </div>
</div>
    
</div>
  

  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    

  
    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Merci <br>
      © Interface3  Hackaton 2023
     
    </div>
    <!-- Copyright -->
  </footer>

    
</body>
</html>