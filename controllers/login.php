<?php
session_start();
// $userName = 'Greta';
// $passWord = '1234';


$users = [
    [
        'name' => 'jon',
        'password' => '1234'
    ],
    [
        'name' => 'jane',
        'password' => '0000'
    ],
    [
        'name' => 'martin',
        'password' => 'azerty'
    ],
    [
      'name' => 'Greta',
      'password' => 'garbo'
  ],

  ];
  

foreach ($users as $user) {

  if ($_POST['name'] === $user['name'] && $_POST['password']=== $user['password']) {
    $_SESSION['name'] = ucfirst($_POST['name']);
    header('Location:/');
    exit();
  }
 
}
header('Location:/connection.php');
exit();


// if ($_POST['name'] === $userName && $_POST['password']=== $passWord){
//   $_SESSION['name'] = $_POST['name'];
//   $_SESSION['password'] = $_POST['password'];
//   header('Location:/');
//   exit();
// }else{
//   header('Location:/connection.php');
//   exit();
// }



//  // Logique : l'utilisateur est connecté ! $_POST et $_SESSION ils ont une durée de vie de une requete
// //$_SESSION il existe toujours mais le ['pseudo'] existe que si je suis connecté
// var_dump($_SESSION);

// header('Location: /');
// exit ();

//Si el usuario está conectado entonces
// nueva variable $connected , si $connected
