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
      print("<h1>Bienvenue sur Astral"."</h1><br>"); // Message par défaut si le nom n'est pas défini en session
  }?>

    <div class="jeu"></div>
    

<div class="container">
  <div class="row">
    <div class="col-10">
      <h3> What is Astral ?</h3>
      <p class="parag">  During the recent hackathon event involving teams WAD, WEB, GAME, and ASR, we embarked on an exciting journey over two and a half days. Astral is a game where we draw a tarot card to glimpse into our future. It's an immersive experience that not only tests our technical skills but also adds a touch of mysticism to the world of coding and development. As we delved into this unique project, we explored the intersection of technology and fortune-telling, and the result was a captivating blend of creativity and innovation."  </p>
    </div>
    <div class="col-10">
      <h3> Who are we?</h3>
      <p class="parag"><strong>Dorine and Emanuela (Backend - WAD and Web Integration)</strong>: These two skilled individuals are the backbone of our technical endeavors. Dorine and Emanuela are responsible for the server-side development and seamless integration of web components. Their proficiency ensures that our projects are not only functional but also efficient.</p>

      <p class="parag"><strong>Chantal (Front-End Development - WEB)</strong> and Site Design: Chantal is the artistic genius of our team. She takes care of the user interface and design of our websites, making them visually appealing and user-friendly. Her creativity and attention to detail breathe life into our projects.</p>

      <p class="parag"><strong>Tonia, Nael, and Hafsa (Unity Game Development - GAME)</strong>: The gaming department is in the capable hands of Tonia, Nael, and Hafsa. Together, they craft immersive gaming experiences using Unity. Their collaborative efforts result in captivating and interactive games that engage our audience.</p>

      <p class="parag"><strong>Ingrid and Hanina (Network Implementation - ASR)</strong>: Ingrid and Hanina manage the intricate world of network implementation. Their expertise ensures that our applications run smoothly and securely over various network environments.  </p><br><br>
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