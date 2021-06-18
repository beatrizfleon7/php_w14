<?php session_start()?>

 <header>
   <div class="container_header">
      <nav>
        <ul>
          <li><a href="./index.php">Accueil</a></li>
          <li><a href="./users.php"> Users</a></li>
          <li><a href="./connected.php"> Contenu</a></li>
          <li><a href="./signup.php"> Inscription</a></li>
          <?php if(isset($_SESSION['name'])) {?>
            <li class="bienvenue">Bonjour, <?= $_SESSION['name']?>!</li>
            <li><a href="/controllers/logout.php">Déconnexion</a></li>
          <?php } else { ?>
            <li><a href="/connection.php">Connexion</a></li>
          <?php } ?> 
         
          
          
        </ul>
      </nav>
    </div>
  </header>



