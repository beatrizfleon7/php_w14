<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="/css/header.css">
    <title>Document</title>
  </head>
  <body>
   
     <?php require_once('./templates/header.php');?>
     
     <?php if(isset($_SESSION['name'])) {?>
      <main>
      <div class="image">
        <img src="./img/bouquet.png" alt="">
      </div>
    </main>
    <?php }else{ ?>
        <p>Connectez-vous pour avoir accès a ce contenu</p>
      
      <?php }?>
     

    
     <?php require_once('./templates/footer.php');?>
     
   
  </body>
</html>

