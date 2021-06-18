<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/header.css">
  <title>Inscription</title>
</head>
<body>

  <?php require_once('./templates/header.php');?>
  <main>
    <h1> Inscrivez-vous! </h1>
    <form action="validation.php" method="POST">
      <div class="form-group">
        <label for="name"> Nom</label>
        <input type="text" name="name" class="form-control" placeholder= "Nom" value= "">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password"  class="form-control" placeholder= "Password" value="">
      </div>
      <div class="form-group">
        <label for="age"> Age</label>
        <input type="number" name="age" class="form-control" placeholder= "Age" value="">
      </div>
      <div class="form-group">
        <div>
          <input type="radio" name="gender" value ="man" class="" >
          <label for="man">Homme</label>
        </div>
        <div>
          <input type="radio" name="gender" value ="woman"class="" >
          <label for="woman">Femme</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary"> S'inscrire </button>

    </form>
 </main>
  
 <?php require_once('./templates/footer.php');?>
</body>
</html>
