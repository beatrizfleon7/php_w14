

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/style.css">
  
  <title>Connexion</title>
</head>
<body>
    <?php require_once('./templates/header.php') ?>
    <main class= "container">
      <h1>Se connecter</h1>
      <form action="controllers/login.php" method="POST">
        <div class="signup">
          <div>
            <label for="name">Username</label>
            <input type="text" class="form-control" placeholder="Nom" name="name" value="">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" value="">
          </div>
          <button type="submit" class="btn_connection">Se connecter</button>
        </div>
        
      </form>
    </main>
    <?php require_once('./templates/footer.php');?>
</body>
</html>