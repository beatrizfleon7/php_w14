<?php
//un nom, une couleur preferée, un âge
$users = [
  ['Paulette', 'rouge', 85, 'Spain'],
  ['Martin', 'bleu', 12, 'France'],
  ['Octarine', 'orange', 30, 'Italie'],
];

// var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>

<header>
      <?php
          require_once('header.php');
      ?>
</header>
<h1>Liste de Utilisateurs</h1>
  <table>
  <tr> 
    <th>Nom</th>
    <th>Couleur</th>
    <th>Age</th>
    <th>Pays</th>
  </tr>
  <?php

  foreach ($users as $user) {
     echo "<tr>";
        foreach( $user as $i){
          echo "<td> $i </td>";
        }
      echo "</tr>";
  }

  ?>
   
  </table>
  <footer>
  <?php
      require_once('footer.php');
      ?>
  </footer>
</body>
</html>